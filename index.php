<?php 
$titulo = 'Cinebox - Inicio';
include './includes/header.php';


?>
    <section id="banner">
        <!-- id é um identificador unico, ao contrario dda classe que existe varias -->
        <main class="carrossel-container">
            <div class="carrossel">
                <img src="./assets/img/banner/banner_00.jpg" alt="Banner_00">
                <img src="./assets/img/banner/banner_01.jpg" alt="Banner_01">
                <img src="./assets/img/banner/banner_02.jpg" alt="Banner_02">
                <img src="./assets/img/banner/banner_03.jpg" alt="Banner_03">
                <img src="./assets/img/banner/banner_04.jpg" alt="Banner_04">
                <img src="./assets/img/banner/banner_05.jpg" alt="Banner_05">
                <img src="./assets/img/banner/banner_06.jpg" alt="Banner_06">
            </div>
            <!-- precisa colocar todas as imagens dentro de um identificador -->
            <button class="anterior" onclick="javascript:anteriorSlide()"><i class="bi bi-arrow-left"></i></button>
            <button class="proximo" onclick="javascript:proximoSlide()"><i class="bi bi-arrow-right"></i></button>
        </main>
    </section>
    <section id="filmes_recomendados">
        <h2 class="titulo"> Filmes </h2>
        <main class="container">
            <div class="row">

            <?php for ($i = 0; $i < 8; $i++ ){?>
                <div class="col col-3">
                    <figure>
                        <!-- se começa primeiro a tag  figure para prossegir com o figcapture  -->
                        <img src="./assets/img/poster/avatar-o-caminho-da-agua.png"
                            alt="Poster do filme Avatar o caminho da agua" class="foto-produto">

                        <figcaption>
                            <!-- conteudo do card colocar o que esta logo abaixo da foto; -->
                            <h4>Avatar o caminho da agua</h4>
                            <!-- o span é o elemento de linha, adequado para aplicar estilos aocontrario da div que é um elemento em bloco  -->
                            <span class="preco">R$15,90</span>
                            <p class="descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                deserunt mollit anim id est laborum."</p>
                        </figcaption>
                        <span class="genero">
                            <label style="background-color: #070373;">Fantasia</label>
                            <label style="background-color: #580259;">Drama</label>
                            <label style="background-color: #D966BA;">Ficção</label>
                        </span>

                    </figure>
                </div>

                <?php } ?>
                
            </div>


        </main>
    </section>

