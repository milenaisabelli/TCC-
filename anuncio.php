<?php include 'inc/header.php';

if(!$_SESSION["UsuarioLogadoId"]): ?>
  <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column text-center">
    <main class="px-3">
      <h1>Acesso negado</h1>
      <p class="lead">Por favor efetue login para gerenciar seus imóveis</p>
      <p class="lead">
        <a href="javascript:void(0);" data-bs-toggle="modal" data-bs-target="#modal-signin" class="btn btn-lg btn-secondary">Login</a>
      </p>
    </main>
  </div>
<?php else: ?>
    <?php salvarimovel(); ?>
    <section class="py-7">
        <div class="row g-2">
            <div class="col-md-6 offset-md-3 col-lg-6">
                <h4 class="mb-3">Informações do Imóvel:</h4>
                <form action="anuncio.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="imovel[infousuarioId]" value="<?php echo $_SESSION["UsuarioLogadoId"] ?>" />
                    <div class="row g-3">
                        <div class="col-sm-12">
                            <label for="firstName" class="form-label">Nome Imóvel </label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" name="imovel['nome']" required>
                            <div class="invalid-feedback">
                                Insira o nome.
                            </div>
                        </div>

                        <div class="col-md-4">
                            <label for="cep" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="CEP" placeholder="" value="" name="imovel['cep']" required>
                            <div class="invalid-feedback"></div>
                        </div>

                        <div class="col-md-12">
                            <label for="sobrenome" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="Endereco" placeholder="" value="" name="imovel['endereco']" required>
                            <div class="invalid-feedback">
                                É obrigatório inserir um sobre nome válido.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="address" class="form-label">Número:</label>
                                <input type="text" class="form-control" id="numero" placeholder="" value="" name="imovel['numero']" required>
                                <div class="invalid-feedback">
                                    Preencha essa lacuna.
                                </div>
                            </div>

                            <div class="col-6">
                                <label for="address" class="form-label">Complemento:</label>
                                <input type="text" class="form-control" id="address" placeholder="" value="" name="imovel['complemento']" required>
                                <div class="invalid-feedback">
                                    Preencha essa lacuna.
                                </div>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-3">
                                <label for="country" class="form-label">País</label>
                                <select class="form-control" id="Pais" placeholder="" value="" name="imovel['pais']" required>
                                    <option value="">Escolha...</option>
                                    <option value="Brasil">Brasil</option>

                                </select>
                                <div class="invalid-feedback">

                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="country" class="form-label">Estado</label>
                                <select class="form-control" id="Estado" name="imovel['estado']" required>
                                    <option value="">Escolha...</option>

                                    <option value="AC">Acre (AC)</option>
                                    <option value="AL">Alagoas (AL)</option>
                                    <option value="AP">Amapá (AP)</option>
                                    <option value="AM">Amazonas (AM)</option>
                                    <option value="BA">Bahia (BA)</option>
                                    <option value="CE">Ceará (CE)</option>
                                    <option value="DF">Distrito Federal (DF)</option>
                                    <option value="ES">Espirito Santo (ES)</option>
                                    <option value="GO">Goiás (GO)</option>
                                    <option value="MA">Maranhão (MA)</option>
                                    <option value="MT">Mato Grosso (MT)</option>
                                    <option value="MS">Mato Grosso do Sul (MS)</option>
                                    <option value="MG">Minas Gerais (MG)</option>
                                    <option value="PA">Pará (PA)</option>
                                    <option value="PB">Paraíba (PB)</option>
                                    <option value="PR">Paraná (PR)</option>
                                    <option value="PE">Pernambuco (PE)</option>
                                    <option value="PI">Piauí (PI)</option>
                                    <option value="RJ">Rio de Janeiro (RJ)</option>
                                    <option value="RN">Rio Grande do Norte (RN)</option>
                                    <option value="RS">Rio Grande do Sul (RS)</option>
                                    <option value="RO">Rondônia (RO)</option>
                                    <option value="RR">Roraima (RR)</option>
                                    <option value="SC">Santa Catarina (SC)</option>
                                    <option value="SP">São Paulo (SP)</option>
                                    <option value="SE">Sergipe (SE)</option>
                                    <option value="TO">Tocantins (TO)</option>
                                </select>

                                <div class="invalid-feedback">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <label for="cidade" class="form-label">Cidade</label>
                                <input type="text" class="form-control" id="Cidade" placeholder="" value="" name="imovel['Cidade']" required>
                                <div class="invalid-feedback"></div>
                            </div>
                            <div class="col-md-3">
                                <label for="cidade" class="form-label">Bairro</label>
                                <input type="text" class="form-control" id="Bairro" placeholder="" value="" name="imovel['bairro']" required>
                                <div class="invalid-feedback"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <label for="email" class="form-label">Preço: <span class="text-muted"></span></label>
                                <input type="text" class="form-control" id="email" placeholder="" value="" name="imovel['preco']" required>
                                <div class="invalid-feedback">
                                    Campo obrigatorio!
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="email" class="form-label">Tamanho: <span class="text-muted"></span></label>
                                <input type="text" class="form-control" id="tamanho" placeholder="" value="" name="imovel['tamanho']" required>
                                <div class="invalid-feedback">
                                    Campo obrigatorio!
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label for="email" class="form-label">Descrição: <span class="text-muted"></span></label>
                            <textarea rows="6" class="form-control" id="experiencia" name="imovel['descricao']"></textarea>
                            <div class="invalid-feedback">
                                Campo obrigatorio!
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="country" class="form-label">Quartos</label>
                            <select class="form-select" id="country" placeholder="" value="" name="imovel['quartoid']" required>
                                <option value="">Escolha...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4 ou mais</option>
                            </select>
                            <div class="invalid-feedback">

                            </div>

                        </div>

                        <div class="col-md-3">
                            <label for="country" class="form-label">Banheiros</label>
                            <select class="form-select" id="country" placeholder="" value="" name="imovel['banheirosid']" required>
                                <option value="">Escolha...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4 ou mais</option>
                            </select>
                            <div class="invalid-feedback">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <label for="country" class="form-label">Vagas</label>
                            <select class="form-select" id="country" placeholder="" value="" name="imovel['vagasid']" required>
                                <option value="">Escolha...</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4 ou mais</option>
                            </select>
                            <div class="invalid-feedback">

                            </div>

                        </div>
                        <div class="col-md-3">
                            <label for="country" class="form-label">Tipo</label>
                            <select class="form-select" id="country" placeholder="" value="" name="imovel['tipoid']" required>
                                <option value="">Escolha...</option>
                                <option value="1">Aluguel</option>
                                <option value="2">Venda</option>
                                <option value="3">Aluguel ou Venda</option>
                            </select>
                            <div class="invalid-feedback">

                            </div>

                        </div>

                        <div class="mb-3">
                        <label for="formFileSm" class="form-label">Foto</label>
                        <input class="form-control form-control-sm" id="formFileSm" name="fotoimovel" type="file">
                        </div>
                        <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">Concordo com os termos de uso</label>
                        </div>
                        <hr class="my-4">

                        <input type="submit" class="btn btn-primary mb-3" value="Salvar" />
                    </div>
                </form>
            </div>
        </div>
    </section>

<?php endif; ?>

<script>
    $("#CEP").blur(function () {
            $("#Endereco").val("Buscando...");

            // seta a variavel requisitada no campo cep
            var consulta = $(this).val().replace(".", "").replace("-", "");

            url = "//viacep.com.br/ws/" + consulta + "/json/";
            $.getJSON(url, function (data) {
                var rua = unescape(data.logradouro);
                var bairro = unescape(data.bairro);
                var cidade = unescape(data.localidade);
                var uf = unescape(data.uf);
                var erro = unescape(data.erro);

                if (erro == "true") {
                    $("#Endereco").val("");
                    $("#Estado").val("");
                    $("#Cidade").val("");
                    $("#Bairro").val("");

                    return false;
                }


                // preenche os campos
                $("#Endereco").val(rua);
                $("#Estado").val(uf);
                $("#Cidade").val(cidade);
                $("#Bairro").val(bairro);
                $("#Pais").val("Brasil");
            });
        });
</script>

<?php include 'inc/footer.php';