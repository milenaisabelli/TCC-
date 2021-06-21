<?php include 'inc/header.php'; ?>
<div class="container-fluid mb-2">
  <main>
    <div class="py-5 text-center">
      <h2>Registro de Usuário</h2>
      <p class="lead">Por favor informe abaixo os seus dados</p>
    </div>

    <div class="row g-2">
      <div class="col-md-6 offset-md-3 col-lg-6">
        <h4 class="mb-3">Informações Pessoais:</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nome</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Insira seu nome.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Sobrenome</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Insira seu sobrenome.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nome de usuario</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Nome de usuario" required>
              <div class="invalid-feedback">
                  Nome de usuario invalido.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Opcional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="email@local.com">
              <div class="invalid-feedback">
               Email invalido.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Endereço</label>
              <input type="text" class="form-control" id="address" placeholder="Número, rua" required>
              <div class="invalid-feedback">
                Endereço invalido.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Adicionais Endereço <span class="text-muted">(Opcional)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="Apartamento,Sobrado.">
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

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Concordo com os termos de uso</label>
          </div>

         

          <hr class="my-4">

          <a href="index.php" class="btn btn-primary">Cadastro</a>
        </form>
      </div>
    </div>
  </main>
</div>
<?php include 'inc/footer.php'; ?>