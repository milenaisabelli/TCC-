<?php include 'inc/header.php'; ?>

<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/banner1.jpg" width="100%" height="100%" />
        </div>
        <div class="carousel-item">
            <img src="img/banner2.jpg" width="100%" height="100%" />
        </div>
        <div class="carousel-item">
            <img src="img/10.jpg" width="100%" height="100%" />
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container marketing">
    <div class="row">
        <div class="col-md-12">
            <div class="heading-title">
                <h2>Últimos imóveis</h2>
            </div>
        </div>
    </div>
    <div class="row">
        <?php $imoveis = buscarImoveis(); ?>
        <?php if ($imoveis) : ?>
        <?php foreach ($imoveis as $imovel) : ?>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="property-container">
                <div class="property-image">
                    <img src="uploads/<?php echo $imovel['foto']; ?>" alt="mikha real estate theme">
                    <div class="property-price">
                        <h4><?php echo $imovel['complemento']; ?></h4>
                        <span>R$ <?php echo number_format ($imovel['preco'], 2, ',', '.'); ?></span>
                    </div>
                    <div class="property-status">
                        <span><?php echo $imovel['tipo']; ?></span>
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
                <div class="property-content">

                    <h3>
                        <a href="#"><?php echo $imovel['nome']; ?></a>
                        <small>
                            <?php echo $imovel['endereco'] . " " . $imovel['numero'] . "<br />" . $imovel['bairro'] . "-" . $imovel['cidade'] . "/" . $imovel['estado']; ?>
                        </small>
                    </h3>
                </div>
                <div class="property-footer">
                    <a href="#" title="Add to favorite"><i class="fa fa-heart"></i></a>
                    <a href="#" title="Contact Agent"><i class="fa fa-envelope"></i></a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <?php endif; ?>
        <!-- break -->
    </div>
    <div class="container marketing">
        <div class="row">
            <div class="col-md-12">
                <div class="heading-title">
                    <h2>Imóveis Preferidos!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $imoveis = buscarImoveis(); ?>
            <?php if ($imoveis) : ?>
            <?php foreach ($imoveis as $imovel) : ?>
            <div class="col-md-3 col-sm-6 col-xs-12">
                <div class="property-container">
                    <div class="property-image">
                        <img src="uploads/<?php echo $imovel['foto']; ?>" alt="mikha real estate theme">
                        <div class="property-price">
                            <h4><?php echo $imovel['complemento']; ?></h4>
                            <span>R$ <?php echo number_format ($imovel['preco'], 2, ',', '.'); ?></span>
                        </div>
                        <div class="property-status">
                            <span><?php echo $imovel['tipo']; ?></span>
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
                    <div class="property-content">

                        <h3>
                            <a href="#"><?php echo $imovel['nome']; ?></a>
                            <small>
                                <?php echo $imovel['endereco'] . " " . $imovel['numero'] . "<br />" . $imovel['bairro'] . "-" . $imovel['cidade'] . "/" . $imovel['estado']; ?>
                            </small>
                        </h3>
                    </div>
                    <div class="property-footer">
                        <a href="#" title="Add to favorite"><i class="fa fa-heart"></i></a>
                        <a href="#" title="Contact Agent"><i class="fa fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div><!-- /.container -->
    </div>
</div>
<?php include 'inc/footer.php'; ?>