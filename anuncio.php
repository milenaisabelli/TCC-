<?php include 'inc/header.php'; ?>
<div class="container-fluid mb-2">
  <main>
    <div class="py-5 text-center">
      <h2>Anuncie seu imóvel </h2>
      <p class="lead">Por favor informe abaixo os respectivos dados:</p>
    </div>

    <div class="row g-2">
      <div class="col-md-6 offset-md-3 col-lg-6">
        <h4 class="mb-3">Informações do Imóvel:</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome Imóvel </label>
              <input type="text" class="form-control" id="firstName" placeholder="titulo do imóvel" value="" required>
              <div class="invalid-feedback">
                Insira o nome.
              </div>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">ID: <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
             Campo obrigatorio!
              </div>
            </div>
        
            
            
            <div class="col-12">
              <label for="email" class="form-label">Endereço: <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
               Insira um endereço, campo obrigatorio!
              </div>
            </div>

           

            <div class="col-12">
              <label for="address" class="form-label">Número:</label>
              <input type="text" class="form-control" id="address" placeholder="1234" required>
              <div class="invalid-feedback">
               Preencha essa lacuna.
              </div>
            </div>

           
           
            <div class="col-md-5">
              <label for="country" class="form-label">Pais</label>
              <select class="form-select" id="country" required>
                <option value="">Escolha...</option>
                <option>Brasil</option>
               
              
              </select>
              <div class="invalid-feedback">
                Insira um país válido.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Estado</label>
              <select class="form-select" id="state" required>
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
                <option>Paraná (PR)</option>
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

            <div class="col-md-3">
              <label for="zip" class="form-label">CEP</label>
              <input type="text" class="form-control" id="zip" placeholder="" required>
              <div class="invalid-feedback">
               CEP invalido. 
              </div>
            </div>
          </div>
          
          <div class="col-12">
              <label for="address" class="form-label">Bairro:</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
               Preencha essa lacuna.
              </div>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Complemento:</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
               Preencha essa lacuna.
              </div>
            </div>
            <div class="col-12">
              <label for="email" class="form-label">Preço: <span class="text-muted"></span></label>
              <input type="email" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
             Campo obrigatorio!
              </div>
            </div>
            <div class="campo">
                    <br>
                    
                    <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
                </div>


                <div class="col-md-3">
              <label for="country" class="form-label">Quartos</label>
              <select class="form-select" id="country" required>
                <option value="">Escolha...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4 ou mais</option>
               
              
              </select>
              <div class="invalid-feedback">
                
              </div>
            
            </div>
            
            <div class="col-md-3">
              <label for="country" class="form-label">Banheiros</label>
              <select class="form-select" id="country" required>
                <option value="">Escolha...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4 ou mais</option>
               
              
              </select>
              <div class="invalid-feedback">
                
              </div>
            
            </div>
           
            <div class="col-md-3">
              <label for="country" class="form-label">Vagas</label>
              <select class="form-select" id="country" required>
                <option value="">Escolha...</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4 ou mais</option>
               
              
              </select>
              <div class="invalid-feedback">
                
              </div>
            
            </div>
            <div class="col-md-3">
              <label for="country" class="form-label">Tipo</label>
              <select class="form-select" id="country" required>
                <option value="">Escolha...</option>
                <option>Aluguel</option>
                <option>Venda</option>
                <option>Aluguel ou Venda</option>
               
               
              
              </select>
              <div class="invalid-feedback">
                
              </div>
            
            </div>
               

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Concordo com os termos de uso</label>
          </div>

   
<?php include 'inc/footer.php'; ?>