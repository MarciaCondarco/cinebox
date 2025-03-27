<?php 

class Filmes{
    // nome do arquivo e nome da classe tem que estar com a letra Maiuscula para identificação de classe
    public function exibirListaFilmes($limite = ''){

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root';
        $password = '';
        $auxScript = '';

        $banco = new PDO($dsn, $user, $password);
        
        if(!empty($limite)){
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }

        $script = 'SELECT * FROM tb_filmes' . $auxScript;

        return $banco->query($script)->fetchAll();
        // vai retornar as funções do banco, obs: o return funciona somente dentro de uma função
    }

    public function exibirFilmeConsulta(){
        if(!isset($_GET['id'])){
            header('location:filmes-consultar.php');
        }
    }

}