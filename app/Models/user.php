<?php

namespace App\Models;

use CoffeeCode\DataLayer\DataLayer;
use Exception;


class user extends datalayer
{


    public function __construct()
    {
        parent::__construct("user", ["fname", "lname", "contct", "username", "email", "password" , "tipo"], "id");
    }

    public function save(): bool
    {

        if (
            !$this->validateEmail() ||
            !$this->validatePassword() ||
            parent::save()

        ) {
            return false;
        }
        return true;
    }



    protected function ValidateEmail(): bool
    {
        if (empty($this->email) || !filter_var($this->email, FILTER_SANITIZE_EMAIL)) {
            $this->fail = new Exception("Informe um endereço de email valido");
            return false;
        }

        $userByEmail = null;
        if(!$this->id) {
        $userByEmail = $this->find("email = :email", "email={$this->email}")->count();
    } else

        {
          $userByEmail = $this->find("email = :email AND !id = :id","email = {$this->email}&id{$this->id}")->count();
        }

        if ($userByEmail){
            $this->fail= new Exception("O email informado já esta em uso");
        }
        return true;
    }

    public function validatePassword():bool {

        if (empty($this->passwd) || strlen($this->passwd) < 8 ){

    $this->fail= new Exception("informe uma password com pelo menos 8 caracteres");
    return false;
        }
     if (password_get_info($this->passwd)["algo"]){
         return true;
     }

     $this->passwd= password_hash($this->passwd , PASSWORD_DEFAULT);
     return true;
    }


}




