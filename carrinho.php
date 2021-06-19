<?php
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Pagamento</title>
    <link rel="stylesheet" href="pagamento.css">
    <script src="https://kit.awesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
</head>
<body>
    <main>
        
        <h2>Página de Pagamento</h2>
        <div class="row">
            <div class="col-75">
                <div class="container">
                    <form id="validate" action="/action_page.php">
                        <div class="row">
                            <div class="col-50">
                                <h3>Informações de Entrega</h3>

                                <label for="fname"><i class="fa fa-user"></i> Nome Completo:</label>
                                <input type="text" id="fname" name="fullname" placeholder="Seu nome aqui" required>
                                <label for="email"><i class="fa fa-envelope"></i> Seu email:</label>
                                <input type="text" id="email" name="email" placeholder="seuemail@---.com" required>
                                <label for="adr"><i class="fa fa-address-card-o"></i> Endereço:</label>
                                <input type="text" id="adr" name="address" placeholder="seu endereço aqui" required>
                                <label for="city"><i class="fa fa-institution"></i> Cidade:</label>
                                <input type="text" id="city" name="city" placeholder="sua cidade" required>
                                
                                <div class="row">
                                    <div class="col-50">
                                        <label for="state">Estado:</label>
                                        <input type="text" id="state" name="state" placeholder="Seu estado"required>
                                    </div>
                                   
                                </div>
                            </div>
        
                            <div class="col-50">
                                <h3>Pagamento</h3>
                                <label for="fname">Cartões aceitos:</label>

                                <div class="icon-container">

                                    <i class="fa fa-cc-visa"></i>
                                    <i class="fa fa-cc-mastercard"></i>
                                   
                                </div>
        
                                <label for="cname">Nome no cartão:</label>
                                <input type="text" id="cname" name="cardname" placeholder="Suas informações estão seguras"required>
                                <label for="ccnum">Número do Cartão:</label>
                                <input type="text" id="ccnum" name="cardnumber" placeholder="....-....-....-...."required>
                                
                                <div class="row">
                                    <div class="col-50">
                                        <label for="expyear">Validade:</label>
                                        <input type="text" id="expyear" name="expyear" placeholder="../.."required>
                                    </div>
                                    <div class="col-50">
                                        <label for="cvv">CVV:</label>
                                        <input type="text" id="cvv" name="cvv" placeholder="---"required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <label>
                        <input type="checkbox" checked="checked" name="sameadr"> Salvar endereço
                        </label>
                        <span class="button-wrapper">
                            <a href="#" onclick="history.go(-1)">VOLTAR</a>
                            
                            <a href="paginainicial.html"  id="button">CONFIRMAR PAGAMENTO</a>
                            
                            
                        </span>
                    </form>
                </div>
            </div>
            
        </div>
        
        <script>
            $('#validate').validate({
                roles: {
                    fullname: {
                        required: true,
                    },
                    email: {
                        required: true,
                    },
                    address: {
                        required: true,
                    },
                    city: {
                        required: true,
                    },
                    state: {
                        required: true,
                    },
                  
                   
                    cardname: {
                        required: true,
                    },
                    cardnumber: {
                        required: true,
                    
                    },
                    expyear: {
                        required: true,
                    },
                    cvv: {
                        required: true,
                    },
                   
                },
                messages: {
                    fullname:"Insira seu nome completo*",
                    email:"Insira seu email*",
                    city:"Insira sua cidade*",
                    address:"Insira seu endereço*",
                    state:"Insira o estado*",
                    cardname:"Insira o Nome no Cartão*",
                    cardnumber:"Insira o número do cartão*",
                
                    expyear:"Insira a validade*",
                    cvv:"Insira o cvv*",
                },
            });
        </script>
       
           
        </form>
    </main>
   
</body>
</html>