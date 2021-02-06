<?php

namespace App\Core;

class Controller {

    public function model($model) {
        require_once 'App/Models/'.$model.'.php';
        return new $model;

    }

    public function view($view, $data = []) {
        require_once 'App/Views/PaginaInicial.php';
    }

    public function viewDash($view, $data = []){

        require_once 'App/Views/usuario/dashboard.php';
    }
}