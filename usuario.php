<?php
include './includes/header.php';

if($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET) && $_GET['sair'] =='true'){
    session_destroy();
    header('location:index.php');
}

if(empty($_SESSION) && !isset($_SESSION['id_pessoa'])){   
    // se não existir a session e estiver vazia no session
    header('location:usuario-login.php'); 
}

?>

<section id="usuario-principal">
    <main class="container usuario-principal">
        <?php
        include_once './includes/user_header.php';
        include_once './includes/user_lista_filmes.php';
        ?>
    </main>
</section>
<?php

include './includes/footer.php';

