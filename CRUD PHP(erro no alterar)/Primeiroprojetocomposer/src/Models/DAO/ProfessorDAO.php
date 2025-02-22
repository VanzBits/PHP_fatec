<?php

namespace Php\Primeiroprojeto\Models\DAO;

use Php\Primeiroprojeto\Models\Domain\Professor;

class ProfessorDAO{

    private Conexao $conexao;

    public function __construct(){
        $this->conexao = new Conexao();
    }

    public function inserir(Professor $professor){
        try{
            $sql = "INSERT INTO professor (nome, telefone) VALUES (:nome, :telefone)";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $professor->getNome());
            $p->bindValue(":telefone", $professor->getTelefone());
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function alterar(Professor $professor){
        try{
            $sql = "UPDATE professor SET nome = :nome, telefone = :telefone WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":nome", $professor->getNome());
            $p->bindValue(":telefone", $professor->getTelefone());
            $p->bindValue(":id", $professor->getId());
            return $p->execute();
        }catch(\Exception $e){
            return 0;
        }
    }

    public function excluir($id){
        try{
            $sql = "DELETE FROM professor WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            return $p->execute();
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultarTodos(){
        try{
            $sql = "SELECT * FROM professor";
            return $this->conexao->getConexao()->query($sql);
        } catch(\Exception $e){
            return 0;
        }
    }

    public function consultar($id){
        try{
            $sql = "SELECT * FROM professor WHERE id = :id";
            $p = $this->conexao->getConexao()->prepare($sql);
            $p->bindValue(":id", $id);
            $p->execute();
            return $p->fetch();
        } catch(\Exception $e){
            return 0;
        }
    }

}
