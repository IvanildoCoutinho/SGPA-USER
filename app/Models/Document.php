<?php


namespace App\Models;


use Alexcrisbrito\Php_crud\Crud;

class Document extends Crud
{
 public function __construct()
 {
     parent::__construct("documents", []);
 }


}