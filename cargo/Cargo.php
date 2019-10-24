<?php

include_once '../Conexao.php';

class Cargo{

    protected $id_cargo;
    protected $nome;

    /**
     * @return mixed
     */
    public function getIdCargo()
    {
        return $this->id_cargo;
    }

    /**
     * @param mixed $id_cargo
     */
    public function setIdCargo($id_cargo)
    {
        $this->id_cargo = $id_cargo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function inserir($dados)
    {
        $nome = $dados['nome'];

        $conexao = new Conexao();
        $sql = "insert into cargo (nome) values ('$nome')";

        return $conexao->executar($sql);
    }

    public function alterar($dados)
    {
        $nome = $dados['nome'];
        $id_cargo = $dados['id_cargo'];

        $sql = "update cargo set 
                    nome = '$nome' 
                where id_cargo = $id_cargo";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function deletar($id_cargo)
    {
        $sql = "delete from cargo where id_cargo = $id_cargo";

        $conexao = new Conexao();
        $conexao->executar($sql);
    }

    public function recuperarTodos()
    {
        $sql = "select * from cargo";

        $conexao = new Conexao();
        return $conexao->recuperarTodos($sql);
    }

    public function recuperarPorId($id_cargo)
    {
        $sql = "select * from cargo where id_cargo = $id_cargo";

        $conexao = new Conexao();
        $dados = $conexao->recuperarTodos($sql);

        $this->id_cargo = $dados[0]['id_cargo'];
        $this->nome = $dados[0]['nome'];
    }
}