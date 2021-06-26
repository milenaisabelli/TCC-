<?php include 'inc/header.php'; ?>
<?php salvarImovel(); ?>

<div class="page-header section-height-75 relative" background-color: img src">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 text-center mx-auto">
            <h1 class="text-white pt-3 mt-n5">Anuncie seu imóvel:</h1>
            <p class="lead text-white mt-3">Kuromi imobiliaria, sua chave na mão!<br></p>
          </div>
        </div>
      </div>
      <div class="position-absolute w-100 z-index-1 bottom-0">
        <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 40" preserveAspectRatio="none" shape-rendering="auto">
          <defs>
            <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>
          </defs>
          <g class="moving-waves">
            <use xlink:href="#gentle-wave" x="48" y="-1" fill="rgba(255,255,255,0.40"></use>
            <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.35)"></use>
            <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.25)"></use>
            <use xlink:href="#gentle-wave" x="48" y="8" fill="rgba(255,255,255,0.20)"></use>
            <use xlink:href="#gentle-wave" x="48" y="13" fill="rgba(255,255,255,0.15)"></use>
            <use xlink:href="#gentle-wave" x="48" y="16" fill="rgba(255,255,255,0.95"></use>
          </g>
        </svg>
      </div>
    </div>
    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>

    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></path>

 

    <div class="col-lg-9 z-index-2 border-radius-xl mt-n10 mx-auto py-3 blur shadow-blur">
          <div class="row">
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"><span id="state1" countto="200">200</span>+</h1>
                <h5 class="mt-3">Anunciantes!</h5>
                <p class="text-sm">Mais de 200 anunciantes mensais!</p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"> <span id="state2" countto="427">427</span>+</h1>
                <h5 class="mt-3">Usuarios</h5>
                <p class="text-sm">Em torno de 427 usuarios cadastrados </p>
              </div>
              <hr class="vertical dark">
            </div>
            <div class="col-md-4 position-relative">
              <div class="p-3 text-center">
                <h1 class="text-gradient text-primary"><span id="state3" countto="50">50</span>+</h1>
                <h5 class="mt-3"> Afiliados!</h5>
                <p class="text-sm">Já possuimos 50 afiliados em nosso sistema</p>
              </div>
              <hr class="vertical dark">
            </div>
           
          </div>
        </div>

<section class="py-7">
<div class="row g-2">
      <div class="col-md-6 offset-md-3 col-lg-6">
        <h4 class="mb-3">Informações do Imóvel:</h4>
        <form class="needs-validation" novalidate>
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
              <input type="text" class="form-control" id="endereco" placeholder="" value= "" name="imovel['endereco']" required>
              <div class="invalid-feedback">
               Insira um endereço, campo obrigatorio!
              </div>
            </div>

           

            <div class="col-6">
              <label for="address" class="form-label">Número:</label>
              <input type="text" class="form-control" id="numero" placeholder=""  value= "" name="imovel['numero']" required>
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
              <select class="form-select" id="state"placeholder="" value="" name="imovel['estado']" required>
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
              <input type="text" class="form-control" id="address" placeholder="" value= "" name="imovel['cidade']" required>
              <div class="invalid-feedback">
               Preencha essa lacuna.
              </div>
            </div>
            <div class="col-3">
              <label for="address" class="form-label">Bairro:</label>
              <input type="text" class="form-control" id="bairro" placeholder="" value= "" name="imovel['bairro']" required>
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
              <textarea rows="6"  class="form-control" id="experiencia" name="imovel['descricao']"></textarea>
              <div class="invalid-feedback">
             Campo obrigatorio!
              </div>
            </div>
                <div class="col-md-3">
              <label for="country" class="form-label">Quartos</label>
              <select class="form-select" id="country" placeholder="" value="" name="imovel['quartoid']"required>
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
              <select class="form-select" id="country" placeholder="" value="" name="imovel['vagasid']"required>
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
              <select class="form-select" id="country" placeholder="" value=""name="imovel['tipoid']"required>
                <option value="">Escolha...</option>
                <option value="1">Aluguel</option>
                <option value="2">Venda</option>
                <option value="3">Aluguel ou Venda</option>              
              </select>
              <div class="invalid-feedback">
                
              </div>
            
            </div>
               

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Concordo com os termos de uso</label>
          </div>
          <hr class="my-4">

          <input type="submit" class="btn btn-primary mb-3" value="Salvar" />
 

 
    <div class="container">
     
      <div class="row">
        <div class="col-lg-6 col-12">
         
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                
                
                    
                  </div>
                </a>
              </div>
              
               
                  
           
                <div class="container">
      <div class="row">
       
  
         
           
        
      
    </div>
        
    <div class="position-absolute w-100 bottom-0 mn-n1">
      <svg width="100%" viewBox="0 -1 1920 166" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <title>wave-up</title>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g transform="translate(0.000000, 5.000000)" fill="#FFFFFF" fill-rule="nonzero">
            <g id="wave-up" transform="translate(0.000000, -5.000000)">
           
            </g>
          </g>
        </g>
      </svg>
    </div>
  </section>

     
    </div>
    
    




  
  

    

        
    <div class="container">
     
      <div class="row">
        <div class="col-lg-6 col-12">
         
            <div class="row">
              <div class="col-lg-4 col-md-6 col-12 pe-lg-0">
                
                
                    
                  </div>
                </a>
              </div>
              
               
                  
           
            
       
  
         
           
        
      
    
    
  
  