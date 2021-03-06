<footer id="footer" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <img src="img/logo_branca.png" style="height: 75px; width: auto;" class="mb-4">
                        <address>
                            <strong>Real estate theme.</strong><br>
                            9.5 Main Street, Jjrn Plrt Btl<br>
                            <br>
                            Telp. : +62-345678910<br>
                            Email : info@mikha.com
                        </address>
                    </div>
                </div>
                <!-- break -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3>Top Real Estate Listed</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Apartments</a></li>
                            <li><a href="#">Office</a></li>
                            <li><a href="#">Bungalows</a></li>
                            <li><a href="#">Serviced Residence</a></li>
                            <li><a href="#">Villa</a></li>
                        </ul>
                    </div>
                </div>
                <!-- break -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3>Top Agents Listed</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">Lorenso</a></li>
                            <li><a href="#">Bardiman</a></li>
                            <li><a href="#">Tarjono noto boto limo</a></li>
                            <li><a href="#">Surti</a></li>
                            <li><a href="#">Ngatinem</a></li>
                        </ul>
                    </div>
                </div>
                <!-- break -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="widget">
                        <h3>Features</h3>
                        <ul class="list-unstyled">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">How To</a></li>
                            <li><a href="#">Market Trend</a></li>
                            <li><a href="#">Android App</a></li>
                            <li><a href="#">IOS App</a></li>
                        </ul>
                    </div>
                </div>
                <!-- break -->
            </div>
            <!-- break -->
            <!-- begin:copyright -->
            <div class="row">
                <div class="col-md-12 copyright">
                    <p>?? 2021 Kuromi Im??veis by <strong>Milena.</strong> Todos os direitos reservados.</p>
                    <a href="#top" class="btn btn-success scroltop"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
            <!-- end:copyright -->

        </div>
    </footer>
    <div class="modal fade" id="modal-mail" tabindex="-1" role="dialog" aria-labelledby="modal-mail" aria-hidden="true" style="display: none;">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Enviar Mensagem</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form role="form">
                        <div class="form-group">
                            <label for="emailAddress">Nome</label>
                            <input type="email" class="form-control input-lg" placeholder="Informe o seu nome" id="txtEmail">
                        </div>    
                        <div class="form-group">
                            <label for="emailAddress">E-Mail</label>
                            <input type="email" class="form-control input-lg" placeholder="Informe o e-mail" id="txtEmailContato">
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Celular</label>
                            <input type="email" class="form-control input-lg" placeholder="Informe o e-mail" id="txtEmail">
                        </div>
                        <div class="form-group">
                            <label for="emailAddress">Mensagem</label>
                            <textarea rows="4" class="form-control input-lg" id="txtEmail"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <div class="d-grid gap-2" style="width:100%">
                        <button type="button" class="btn btn-success btn-lg" data-bs-dismiss="modal" aria-label="Close">Enviar Mensagem</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php if($_SESSION["UsuarioLogadoId"]): ?>
        <div class="modal fade" id="modal-perfil" tabindex="-1" role="dialog" aria-labelledby="modal-perfil" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Perfil</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">

                            <h4> Bem-Vindo <?php echo $_SESSION["UsuarioLogadoNome"] ?>! </h4>

                            <div class="user-account-main" data-role="user-account-main">


                                <div class="flyout-user-signIn" data-role="user-signIn">
                                    <p class="flyout-welcome-text" data-role="flyout-welcome"></p>

                                    <p></p>



                                    <div class="" id="flyout-remind-list"></div>
                                    <ul class="" data-role="quick-entry">

                                        <li><a href="fav.php" rel="nofollow">Meus favoritos</a></li>
                                        <li><a href="anuncios.php" rel="nofollow">Meus anuncios</a></li>
                                        <li><a href="cadastro.php" rel="nofollow">Alterar meu cadastro</a></li>
                                    </ul>

                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <div class="d-grid gap-2" style="width:100%">
                            <a href="logout.php" class="btn btn-success btn-lg" type="button">Sair</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
        <div class="modal fade" id="modal-signin" tabindex="-1" role="dialog" aria-labelledby="modal-signin" aria-hidden="true" style="display: none;">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form role="form">
                            <div class="form-group">
                                <label for="emailAddress">E-mail</label>
                                <input type="email" class="form-control input-lg" placeholder="Informe o e-mail" id="txtLogin">
                            </div>
                            <div class="form-group">
                                <label for="password">Senha</label>
                                <input type="password" class="form-control input-lg" placeholder="Senha" id="txtSenha">
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="forget"> Mantenha-me logado
                                </label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <p>Ainda n??o ?? cadastrado? <a href="cadastro.php">Cadastre-se Aqui.</a></p>
                        <div class="d-grid gap-2" style="width:100%">
                            <button id="btnLogin" class="btn btn-success btn-lg" type="button">Logar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <script src="js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).on("click", "#btnLogin", function() {
            $.getJSON('login.php', {
                email: $("#txtLogin").val(),
                senha: $("#txtSenha").val()
            })
            .done(function (data) {
                if(data.resultado === false)
                {
                    alert("Usu??rio ou senha inv??lidos!");
                }
                else
                {
                    location.href = "index.php";
                }
            })
            .fail(function (jqxhr, textStatus, error) {
                var err = textStatus + ", " + error;
                console.log("Request Failed: " + err);
            });
        });

        $(document).on("click", "#btnSalvarFavorito", function() {
            <?php if($_SESSION["UsuarioLogadoId"]): ?>
                var $imovel = $(this).data("imovel");
                var $estilo = $('[data-imovel=' + $imovel + ']').prop("class");
                var $acao = "";

                if($estilo == "favorito")
                {
                    $('[data-imovel=' + $imovel + ']').removeClass("favorito");
                    $acao = "remover";
                }
                else
                {
                    $('[data-imovel=' + $imovel + ']').addClass("favorito");
                    $acao = "adicionar";
                }

                $.getJSON('salvarfavorito.php', {
                    usuario: <?php echo $_SESSION["UsuarioLogadoId"]; ?>,
                    imovel: $imovel,
                    acao: $acao
                })
                .done(function (data) {
                    
                })
                .fail(function (jqxhr, textStatus, error) {
                    var err = textStatus + ", " + error;
                    console.log("Request Failed: " + err);
                });

            <?php else: ?>
                alert("Voc?? deve estar logado para poder adicionar aos favoritos!")
            <?php endif; ?>
        });
    </script>
</body>
</html>