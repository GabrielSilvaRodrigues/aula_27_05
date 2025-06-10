<?php

namespace src\Controllers;

use src\Services\AlunosService;

class AlunoControllers{
    private $service;

    public function __construct(){
        $this->service = new AlunosService();
    }

    public function criar(){
        $data = json_decode(file_get_contents("php://input"));
        echo json_encode(
            $this->service->criar($data->nome, $data->genero)
        );
    }
}

?>