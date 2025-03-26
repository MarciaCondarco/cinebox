
<?php 
require './classes/Filmes.php'; 

$titulo = 'Cinebox - Inicio';
include './includes/header.php';
include './includes/banner.php';

$filmes = new Filmes();
$dadosFilmes = $filmes -> exibirListaFilmes(8);

include './includes/filme_lista.php';

include './includes/footer.php'; 

// require -> requere os arquivos obrigatorios, sempre na primeira linha para não carregar o site
// sempre que quiser chamar a função da classe usar a seta -> 