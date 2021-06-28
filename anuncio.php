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
  <?php salvarImovel(); ?>

<section class="py-7">
    <div class="row g-2">
        <div class="col-md-6 offset-md-3 col-lg-6">
            <h4 class="mb-3">Informações do Imóvel:</h4>
            <form class="needs-validation" method="post" enctype="multipart/form-data">
                <input type="hidden" name="imovel[infousuarioId]" value="<?php echo $_SESSION["UsuarioLogadoId"] ?>" />
                <div class="row g-3">
                    <div class="col-sm-12">
                        <label for="firstName" class="form-label">Nome Imóvel </label>
                        <input type="text" class="form-control" id="firstName" placeholder="" value="" name="imovel['nome']" required>
                        <div class="invalid-feedback">
                            Insira o nome.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Endereço: <span class="text-muted"></span></label>
                        <input type="text" class="form-control" id="endereco" placeholder="" value="" name="imovel['endereco']" required>
                        <div class="invalid-feedback">
                            Insira um endereço, campo obrigatorio!
                        </div>
                    </div>



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
                    <div class="col-md-3">
                        <label for="country" class="form-label">Pais</label>
                        <select class="form-select" id="country" placeholder="" value="" name="imovel['pais']" required>
                            <option value="">Escolha...</option>
                            <option value="Brasil">Brasil</option>


                        </select>
                        <div class="invalid-feedback">
                            Insira um país válido.
                        </div>
                    </div>

                    <div class="col-md-3">
                        <label for="state" class="form-label">Estado</label>
                        <select class="form-select" id="state" placeholder="" value="" name="imovel['estado']" required>
                            <option value="">Escolha...</option>
                            <option>Acre (AC)</option>
                            <option>Alagoas (AL)</option>
                            <option>Amapá (AP)</option>
                            <option>Amazonas (AM)</option>
                            <option>Bahia (BA)</option>
                            <option>Ceará (CE)</option>
                            <option>Distrito Federal (DF)</option>
                            <option>Espirito Santo (ES)</option>
                            <option>Goiás (GO)</option>
                            <option>Maranhão (MA)</option>
                            <option>Mato Grosso (MT)</option>
                            <option>Mato Grosso do Sul (MS)</option>
                            <option>Minas Gerais (MG)</option>
                            <option>Pará (PA)</option>
                            <option>Paraíba (PB)</option>
                            <option value="PR">Paraná (PR)</option>
                            <option>Pernambuco (PE)</option>
                            <option>Piauí (PI)</option>
                            <option>Rio de Janeiro (RJ)</option>
                            <option>Rio Grande do Norte (RN)</option>
                            <option>Rio Grande do Sul (RS)</option>
                            <option>Rondônia (RO)</option>
                            <option>Roraima (RR)</option>
                            <option>Santa Catarina (SC)</option>
                            <option>São Paulo (SP)</option>
                            <option>Sergipe (SE)</option>
                            <option>Tocantins (TO)</option>

                        </select>
                        <div class="invalid-feedback">
                            Please provide a valid state.
                        </div>
                    </div>
                    <div class="col-3">
                        <label for="address" class="form-label">Cidade:</label>
                        <input type="text" class="form-control" id="address" placeholder="" value="" name="imovel['cidade']" required>
                        <div class="invalid-feedback">
                            Preencha essa lacuna.
                        </div>
                    </div>
                    <div class="col-3">
                        <label for="address" class="form-label">Bairro:</label>
                        <input type="text" class="form-control" id="bairro" placeholder="" value="" name="imovel['bairro']" required>
                        <div class="invalid-feedback">
                            Preencha essa lacuna.
                        </div>
                    </div>

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
                            <option value="5">0</option>
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
                            <option value="5">0</option>
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
                            <option value="5">0</option>
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

                   <!-- <div class="mb-3">
                      <label for="formFileSm" class="form-label">Foto</label>
                      <input class="form-control form-control-sm" id="formFileSm" name="'fotoimovel'" type="file">
                    </div>
                    <hr class="my-4"> -->

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

<?php include 'inc/footer.php';