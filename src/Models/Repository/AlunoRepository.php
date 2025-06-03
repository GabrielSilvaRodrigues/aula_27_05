<?php
use src\Config\connection;
use src\Models\Entity\Aluno;
class AlunoRepository{
    public $conn;
    public function __construct(){
        $database = new conection();
        $this->conn = $database->getConnection();
    }
    public function save(Aluno $aluno){
        $query = "INSERT INTO aluno (nome, genero) VALUES (:nome, :genero)";
        $nome = $aluno->getNome();
        $genero = $aluno->getGenero();
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':genero', $genero);
        $stmt->execute();
        
    }
}
?>