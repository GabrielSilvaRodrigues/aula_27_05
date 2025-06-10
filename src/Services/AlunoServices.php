<?php
namespace src\Services;
use src\Repositories\AlunoRepository;
use src\Models\Entity\Aluno;

class AlunoServices{
    private $alunoRepository;

    public function __construct(){
        $this->alunoRepository = new AlunoRepository();
    }
    public function criar(string $nome, string $genero){
        $aluno = new Aluno($nome, $genero);
        $this->alunoRepository->save($aluno);
    }
}
?>