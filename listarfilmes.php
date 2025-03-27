<?php 
require './classes/Filmes.php';
require './classes/Generos.php';


$titulo = '';
include './includes/header.php'; 

$filmes = new Filmes();
$dadosFilmes = $filmes-> exibirListaFilmes();

$generos = new Generos();
$dadosGeneros = $generos-> consultarListaGeneros();

include './includes/filmes_filtro.php';
include './includes/footer.php';
?>