<?php include 'inc/header.php'; ?>
<section class="pt-3 pb-4" id="count-stats">
    <div id="content">
        <div class="container">
            <div class="row">
                <!-- begin:article -->
                <div class="col-md-9 col-md-push-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-title heading-title-alt">
                                <h3>Meus imóveis</h3>
                            </div>
                        </div>
                    </div>
                    <!-- begin:product -->
                    <?php $imoveis = buscarImoveis(null, null, $_SESSION["UsuarioLogadoId"]); ?>
                    <?php if ($imoveis) : ?>
                    <?php foreach ($imoveis as $imovel) : ?>
                        <div class="row container-realestate" style="position: relative; height: 400px;">
                            <div class="col-md-12 col-sm-12 col-xs-12" style="position: absolute; left: 0px; top: 0px;">
                                <div class="property-container">
                                    <div class="property-content-list">
                                        <div class="property-image-list">
                                            <img src="uploads/<?php echo $imovel['foto']; ?>" style="max-height:320px;">
                                            <div class="property-price">
                                                <h4><?php echo $imovel['complemento']; ?></h4>
                                                <span>R$ <?php echo number_format ($imovel['preco'], 2, ',', '.'); ?></span>
                                            </div>
                                            <div class="property-status" style="bottom:0;">
                                                <span><?php echo $imovel['tipo']; ?></span>
                                            </div>
                                        </div>
                                        <div class="property-text">
                                            <h3><a href="#"><?php echo $imovel['nome']; ?></a> 
                                                <small><?php echo $imovel['endereco'] . " " . $imovel['numero'] . "<br />" . $imovel['bairro'] . "-" . $imovel['cidade'] . "/" . $imovel['estado']; ?></small>
                                            </h3>
                                            <p><?php echo $imovel['descricao']; ?></p>
                                            <!-- <p><a href="#" class="btn btn-success">More Detail »</a></p> -->
                                        </div>
                                    </div>
                                    <div class="property-features">
                                        <span><i class="fa fa-home"></i> <?php echo number_format ($imovel['tamanho'], 0, ',', '.'); ?> m<sup>2</sup></span>
                                        <?php if ($imovel['quartos']): ?>
                                        <span><i class="fa fa-bed"></i> <?php echo $imovel['quartos']; ?></span>
                                        <?php endif; ?>
                                        <?php if ($imovel['banheiros']): ?>
                                        <span><i class="fa fa-restroom"></i> <?php echo $imovel['banheiros']; ?></span>
                                        <?php endif; ?>
                                        <span><i class="fa fa-car-side"></i> <?php echo $imovel['vagas']; ?></span>
                                    </div>
                                </div>
                            </div>
                            <!-- break -->
                        </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                    <!-- end:product -->
                    <!-- begin:pagination -->
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <!-- end:pagination -->
                </div>
                <!-- end:article -->
            </div>
        </div>
    </div>
</section>
<?php include 'inc/footer.php'; ?>