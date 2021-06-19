<?php
?>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!---CSS AQUI -->
        <link rel="stylesheet" href="styles.css" media="screen">
        <!-- TÍTULO DA NOSSA PÁGINA -->
        <title>Cadastro</title>
    </head>
    <body>
        <main>
            <!--TITULO DE APARECE NA PAGINA-->
            <h1 id="titulo">Cadastro de Imoveis</h1>
            <p id="subtitulo">Anuncie seu imovel aqui</p>

            <form>
                <fieldset class="grupo">
                    <div class="campo">
                        <label for="nome"><strong>Insira seu nome</strong></label>
                        <input type="text" name="nome" id="nome" required>
                    </div>
                    <div class="campo">
                        <label for="email"><strong>Insira seu Email</strong></label>
                        <input type="text" name="email" id="email" required>
                    </div>
                </fieldset>
                <fieldset class="grupo">
                    <!-- ESCOLHAS -->
                    <div id="check">
                        <label><strong>Sobre o Local:</strong></label><br><br>
                        <input type="checkbox" id="sobre1" name="sobre1" value="PERTO DE LOJAS">
                        <label for="sobre1"> Perto de lojas</label>
                        <input type="checkbox" id="sobre2" name="sobre2" value="AFASTADO">
                        <label for="sobre2"> Afastado de Lojas</label>
                        <input type="checkbox" id="sobre3" name="sobre3" value="PISCINA">
                        <label for="sobre3"> Com Piscina</label>
                        <input type="checkbox" id="sobre4" name="sobre4" value="QUADRA">
                        <label for="sobre4"> Com Quadra</label>
                        <input type="checkbox" id="sobre5" name="sobre5" value="GARAGEM">
                        <label for="sobre5"> Com Garagem</label>
                    </div>
                </fieldset>
                <fieldset class="grupo">
                    <div id="check">
                        <br> <label>Quartos</label> <br>
                        <input type="checkbox" id="quartos1" name="tecnologia1" value="1">
                        <label for="quartos1"> 1 quarto</label>
                        <input type="checkbox" id="quartos2" name="tecnologia2" value="2">
                        <label for="quartos2"> 2 quartos</label>
                        <input type="checkbox" id="quartos3" name="tecnologia3" value="3">
                        <label for="quartos3"> 3 quartos</label>
                        <input type="checkbox" id="quartos4" name="tecnologia4" value="4 ou mais">
                        <label for="quartos4"> 4 ou mais quartos</label>
                    </div>
                </fieldset>
                <fieldset class="grupo">
                    <div id="check">
                        <br> <label>Banheiros</label> <br>
                        <input type="checkbox" id="banheiros1" name="banheiros1" value="1">
                        <label for="banheiros1"> 1 banheiro</label>
                        <input type="checkbox" id="banheiros2" name="2" value="2">
                        <label for="banheiros2"> 2 banheiros</label>
                        <input type="checkbox" id="banheiros3" name="banheiros3" value="3">
                        <label for="banheiros3"> 3 banheiros</label>
                        <input type="checkbox" id="banheiros4" name="banheiros4" value="4 ou mais">
                        <label for="banheiros4"> 4 ou mais </label>
                    </div>
                </fieldset>
                <fieldset class="grupo">
                    <div id="check">
                        <br> <label>Vagas</label> <br>
                        <input type="checkbox" id="vagas1" name="vagas1" value="1">
                        <label for="vagas1"> 1 vaga</label>
                        <input type="checkbox" id="vagas2" name="2" value="2">
                        <label for="vagas2"> 2 vagas</label>
                        <input type="checkbox" id="vagas3" name="vagas3" value="3">
                        <label for="vagas3"> 3 vagas</label>
                        <input type="checkbox" id="vagas4" name="vagas4" value="4 ou mais">
                        <label for="vagas4"> 4 ou mais </label>
                    </div>
                </fieldset>
                <!-- Caixa para descrever o imovel -->
                <div class="campo">
                    <br>
                    <label for="descrição"><strong>DESCREVA O IMOVEL: </strong></label>
                    <textarea rows="6" style="width: 26em" id="experiencia" name="experiencia"></textarea>
                </div>
                <div class="campo">
                    <label><strong>TIPO</strong></label>
                    <input type="radio" name="devweb" value="venda" checked>VENDA
                    <input type="radio" name="devweb" value="aluguel">ALUGUEL
                    <input type="radio" name="devweb" value="os dois ">OS DOIS
                </div>
                
                
               
                    <span class="button-wrapper">
                        <a href="#" onclick="history.go(-1)" id="button">VOLTAR</a>
                        <a href="teste.html"  id="button">ENTRAR</a>
                    </span>
                    </form>
                </span>                
            </form>
        </main>
        <section class="images">
            <img src="img/girl.png.png" alt="Mobile">
            <div class="circle"></div>
        </section>
   </body>
</html>