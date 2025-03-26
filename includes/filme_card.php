
<div class="col col-3">
                    <figure>
                        <!-- se começa primeiro a tag  figure para prossegir com o figcapture  -->
                        <img src="./assets/img/poster/<?= $value['poster'] ?>"
                            alt="poster de <?= $value['nome'] ?> " class="foto-produto">

                        <figcaption>
                            <!-- conteudo do card colocar o que esta logo abaixo da foto; -->
                            <h4><?= $value['nome'] ?></h4>
                            <!-- o span é o elemento de linha, adequado para aplicar estilos aocontrario da div que é um elemento em bloco  -->
                            <span class="preco"><?= $value['valor_ingresso'] ?></span>
                            <p class="descricao"><?= $value['descricao'] ?></p>
                        </figcaption>
                        <span class="genero">
                            <label style="background-color: #070373;">Fantasia</label>
                            <label style="background-color: #580259;">Drama</label>
                            <label style="background-color: #D966BA;">Ficção</label>
                        </span>

                    </figure>
                </div>

