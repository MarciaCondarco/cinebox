


<div class="col-lg-<?= isset($qntd) ? $qntd : 3 ?> col-md-6 col-sm-12">
<a href="./filmes-consultar.php?id=<?= $value['id'] ?>">
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
                            <?php foreach ($generosFilme as $value2) { ?>
                                <label style="background-color: #<?= $value2['cor']?>; "> <?= $value2['nome'] ?></label>

                            <?php } ?>
                        </span>

                    </figure>
                    </a>
                </div>





