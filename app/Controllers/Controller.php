<?php

namespace App\Controllers {

    use CoffeeCode\Router\Router;
    use League\Plates\Engine;

    abstract class Controller {

        protected Router $router;

        protected Engine $view;

        public function __construct(Router $router)
        {
            $this->router = $router;
            $this->view = new Engine(dirname(__DIR__) . "/Views", 'php');
            $this->view->addData(["router" => $router]);
        }


        public function ajaxResponse(string $param , array $values): string {
            return json_encode([$param=>$values]);
        }

    }
}