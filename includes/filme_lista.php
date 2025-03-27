<section id="filmes_recomendados">
        <h2 class="titulo"> Filmes </h2>
        <main class="container">
            <div class="row">

            <?php foreach ($dadosFilmes as $value)
            // foreach passa linha por linha
            {
                $generosFilme = $generos->consultarGeneroByIdFilme($value['id']);
                 include './includes/filme_card.php';
            } 
            ?>                
            </div>
        </main>
</section>