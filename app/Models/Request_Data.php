<?php


namespace App\Models;


use Alexcrisbrito\Php_crud\Crud;

class Request_Data extends Crud
{

    public function __construct()
    {
        parent::__construct("request_data" , []);
    }


}