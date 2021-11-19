<?php

namespace App\Controllers;


use App\Models\Document;
use App\Models\Request_Data;
use App\Models\user;


class Pages extends Controller
{
    public function __construct($router)
    {
        parent::__construct($router);
    }

    public function index(): void
    {
        $docs = (new Document())->find()->execute(fetch_all: true);

        echo $this->view->render("index", [
            "title" => "SGPA-USER | inicio",
            "docs" => $docs
        ]);
    }

    public function request(): void
    {
        echo $this->view->render("request", [
            "title" => "SGPA-USER | Pedidos"
        ]);
    }

    public function request_track(array $data) :void
    {
        if (isset($_SESSION['code']) && $_SESSION['code'] = $data['code']) {

            $request = (new \App\Models\Request())->find()
                ->where("id = '{$data['code']}'")->execute();

            $request_data = (new Request_Data())->find()
                ->where("request_id = '{$data['code']}'")->execute();

            $doc = (new Document())->find()
                ->where("id = '{$request->doc_id}'")->execute();

            echo $this->view->render("track", [
                "title" => "SGPA | Pedido " . $data['code'],
                "request" => $request,
                "request_data" => $request_data,
                "doc" => $doc
            ]);
        }
    }

    /**
     * Error 404
     */
    public function error404(): void
    {
        echo $this->view->render("contact_thanks", [
            "title" => "404 - Page not found"
        ]);
    }


}