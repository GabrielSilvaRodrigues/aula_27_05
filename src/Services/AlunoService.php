<?php
namespace src\Services;
use src\Models\Repository\AlunoRepository;
use src\Models\Entity\Aluno;

class AlunoService{
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