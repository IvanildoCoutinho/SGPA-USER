<?php

namespace App\Controllers;


use App\Models\Document;
use App\Models\user;


class Pages extends Controller
{

    public function __construct($router)
    {
        parent::__construct($router);

//
    }




    /**
     * login
     */
    public function index(): void
    {

    $docs = (new Document())->find()->execute(fetch_all: true);

        echo $this->view->render("index", [
            "title" => "SGPA-USER | inicio",
            "docs" => $docs
        ]);


    }

    /**
     * registar
     */
    public function request(): void
    {
        echo $this->view->render("request", [
            "title" => "SGPA-USER| Pedidos"
        ]);
    }


//     * Thank you
//     */
//    public function contact_thanks(): void
//    {
//        echo $this->view->render("thank-you", [
//            "title" => "Thank You"
//        ]);
//    }
//



    /**
     * Error 404
     */
    public function error404() :void
    {
        echo $this->view->render("contact_thanks", [
            "title" => "404 - Page not found"
        ]);
    }



}