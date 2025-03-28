<?php

class Filmes
{
    // nome do arquivo e nome da classe tem que estar com a letra Maiuscula para identificação de classe
    public function exibirListaFilmes($limite = '')
    {

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $auxScript = '';

        $banco = new PDO($dsn, $user, $password);

        if (!empty($limite)) {
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }

        $script = 'SELECT * FROM tb_filmes' . $auxScript;

        return $banco->query($script)->fetchAll();
        // vai retornar as funções do banco, obs: o return funciona somente dentro de uma função
    }

    public function exibirDetalhesFilmes()
    {
        $id_ = $_GET['id'];

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $banco = new PDO($dsn, $user, $password);
        $script_banco = "SELECT tb_generos.cor, tb_filmes.*, tb_filme_genero.* FROM  tb_filme_genero INNER JOIN tb_filmes ON tb_filmes.id=tb_filme_genero.filme_id INNER JOIN tb_generos ON tb_generos.id=tb_filme_genero.genero_id WHERE tb_filme_genero.filme_id = {$id_}    ";
        
        return $banco->query($script_banco)->fetch();
    }
}
