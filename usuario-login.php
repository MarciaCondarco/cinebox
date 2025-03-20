<?php

include './includes/header.php';

// se o post existe e diferente de vazio    


if($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST)){

    $usuarioFormulario = $_POST['usuario'];
    $senhaFormulario = $_POST['senha'];

    $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
    $user = 'root';
    $password = '';
    
    $banco = new PDO($dsn, $user, $password);

    // quando colocar a variavel em chaves, ele procura a variavel, como $usuarioFormulario a linha abaixo
    // aspas simples so executa.
    // aspas duplas vai interpretar o comando.
    $script = "SELECT * FROM tb_usuario WHERE usuario = '{$usuarioFormulario}' AND senha = '{$senhaFormulario}' ";

    $resultado = $banco->query($script)->fetch();

    // se resultado de vazio e diferente de falso

    if(!empty($resultado) && $resultado != false){

        $selectUsuario = "SELECT * FROM tb_pessoa WHERE id = {$resultado['id_pessoa']} ";
        $dadosUsuario = $banco->query($selectUsuario)->fetch();

        session_start();

        $_SESSION['id_pessoa'] = $dadosUsuario['id_pessoa'];
        $_SESSION['nome'] = $dadosUsuario['nome'];
        $_SESSION['ano_nascimento'] = $dadosUsuario['ano_nascimento'];
        $_SESSION['telefone_1'] = $dadosUsuario['telefone_1'];
        // session guarda todas as informações do usuario

        header('location:usuario.php');
        // redirecionamento
    }else{
        echo'
        <script>
            alert("usuario não encontrado")
            window.location.replace("./usuario-login.php")
        </script>
        ';
    }
}

include './includes/user_login.html';

include_once './includes/footer.php';
