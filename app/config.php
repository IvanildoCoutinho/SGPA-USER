<?php

define("SITE", [
    "root" => "http://localhost/spd",
    "site_name" => "Sistema de Pedido de certificado"
]);

define("DB_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "sred",
    "username" => "root",
    "passwd" => "",
    "options" => [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    ]
]);


define("MAIL", [
    "address" => "sales@cydac.co.mz",
    "passwd" => "RobELBlSrZ8n",
    "server" => [
        "host" => "mail.cydac.co.mz",
        "port" => "465"
    ]
]);


define ("PAY_ENTITY", '462622');