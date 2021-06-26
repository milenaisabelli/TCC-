<?php include 'inc/header.php'; ?>


<body class="bg-light" style="">

    <div class="container">
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h2>Cadastro de Informações do Usuario</h2>
       
      </div>

      <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Explore nosso site como cadastrado!</span>
            <span class="badge badge-secondary badge-pill">3</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Para anunciar clique aqui:</h6>
                <a href="anuncio.php" rel="nofollow">Acessar página de anuncio</a>
              </div>
              <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Para ver imóveis clique aqui:</h6>
                <a href="index.php" rel="nofollow">Acessar página de imóveis</a>
              </div>
              <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Para ver os termos de politica clique aqui:</h6>
                <a href="politica.php" rel="nofollow">Politica de Privacidade</a>
              </div>
              <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Para acessar a aba de favoritos clique aqui:</h6>
                <a href=".php" rel="nofollow">Acessar aba favoritos</a>
              </div>
              <span class="text-muted"></span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Para ver acessar aos manuais de uso clique aqui:</h6>
                <a href=".php" rel="nofollow">Manuais de uso</a>
              </div>
              <span class="text-muted"></span>
            </li>
            
          

         
        </div>
        <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Insira suas informações</h4>
          <form class="needs-validation was-validated" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="primeiroNome">Nome</label>
                <input type="text" class="form-control" id="primeiroNome" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  É obrigatório inserir um nome válido.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" class="form-control" id="sobrenome" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  É obrigatório inserir um sobre nome válido.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="nickname">Nickname</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="nickname" placeholder="Nickname" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Seu nickname é obrigatório.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="pessoa@exemplo.com">
              <div class="invalid-feedback">
                Por favor, insira um endereço de e-mail válido, para atualizações de entrega.
              </div>
            </div>

            <div class="mb-3">
              <label for="endereco">Endereço</label>
              <input type="text" class="form-control" id="endereco" placeholder="Rua ..., nº 0" required="">
              <div class="invalid-feedback">
                Por favor, insira seu endereço de entrega.
              </div>
            </div>

           
             
            
            <div class="col-md-3">
              <label for="country" class="form-label">Estado</label>
              <select class="form-select" id="country" placeholder="" value="" name="" required>
              <option value="">Escolha...</option>
             
                  <option value="AC">Acre (AC)</option>
                <option value="AL">Alagoas (AL)</option>
                <option value= "AP">Amapá (AP)</option>
                <option value="AM">Amazonas (AM)</option>
                <option value= "BA">Bahia (BA)</option>
                <option value= "CE">Ceará (CE)</option>
                <option value= "DF">Distrito Federal (DF)</option>
                <option value= "ES">Espirito Santo (ES)</option>
                <option value="GO">Goiás (GO)</option>
                <option value= "MA">Maranhão (MA)</option>
                <option value= "MT">Mato Grosso (MT)</option>
                <option value="MS">Mato Grosso do Sul (MS)</option>
                <option value= "MG">Minas Gerais (MG)</option>
                <option value= "PA">Pará (PA)</option>
                <option value="PB">Paraíba (PB)</option>
                <option value="PR">Paraná (PR)</option>
                <option value= "PE">Pernambuco (PE)</option>
                <option value= "PI">Piauí (PI)</option>
                <option value= "RJ">Rio de Janeiro (RJ)</option>
                <option value= "RN">Rio Grande do Norte (RN)</option>
                <option value= "RS">Rio Grande do Sul (RS)</option>
                <option value="RO">Rondônia (RO)</option>
                <option value= "RR">Roraima (RR)</option>
                <option value= "SC">Santa Catarina (SC)</option>
                <option value= "SP">São Paulo (SP)</option>
                <option value= "SE">Sergipe (SE)</option>
                <option value="TO">Tocantins (TO)</option>
                </select>
              
              <div class="invalid-feedback">
              </div>
            </div>
           
            <div class="col-md-3">
              <label for="country" class="form-label">País</label>
              <select class="form-select" id="country" placeholder="" value="" name=""required>
                <option value="">Escolha...</option>
                <option value="Brasil">Brasil</option>
                
              </select>
              <div class="invalid-feedback">
                
              </div>
            
           
              <div class="col-md-3 mb-3">
                <label for="cep">CEP</label>
                <input type="text" class="form-control" id="cep" placeholder="" required="">
                <div class="invalid-feedback">
                  É obrigatório inserir um CEP.
                </div>
              </div>
            </div>
            

        
            <input type="submit" class="btn btn-primary mb-3" value="Salvar" />
           

   
<?php include 'inc/footer.php'; ?>