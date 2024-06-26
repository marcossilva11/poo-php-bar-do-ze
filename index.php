<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vinhedo Brabo</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Link fontes -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-main">
        <h1>Bar do zé</h1>
        <div class="form-input">
            <div class="selecao-bebidas">
                <h2>Escolha sua bebida</h2>
                <div class="input-box">
                    <input type="radio" name="bebida" value="Vinho" onclick="func();" id="vinho">
                    <label for="vinho">Vinho</label>
                </div>
                <div class="input-box">
                    <input type="radio" name="bebida" value="Suco" onclick="func();" id="suco">
                    <label for="suco">Suco</label>
                </div>
                <div class="input-box">
                    <input type="radio" name="bebida" value="Refrigerante" onclick="func();" id="refrigerante">
                    <label for="refrigerante">Refrigerante</label>
                </div>
            </div>
            <div class="cadastro-bebidas">
                <form action="php/Principal.php" method="post">
                    <h2>Insira os dados necessários</h2>
                    <p><input type="hidden" name="bebida" value=""></p>
                    <div class="input-box">
                        <label for="nome">Nome da bebida: </label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div class="input-box">
                        <label for="preco">Preço da bebida: </label>
                        <input type="number" name="preco" id="preco">
                    </div>
                    <!--Especialização -->
                    <div class="input-box-espec">
                        <label id="t1"></label>
                        <input type="text" name="" id="espec-1">
                    </div>
                    <div class="input-box-espec">
                        <label id="t2"></label>
                        <input type="text" name="" id="espec-2">
                    </div>

                    <div id="emp">
                        <div class="emp-box">
                            <h2>É retornável?</h2>
                            <div class="input-box">
                                <input type="radio" name="retornavel" value="Sim" id="sim"><label for="sim">Sim</label>
                            </div>
                            <div class="input-box">
                                <input type="radio" name="retornavel" value="Não" id="nao"><label for="nao">Não</label>
                            </div>
                        </div>
                    </div>
                    <div class="input-button">
                        <input type="submit" name="botao" value="Cadastrar">
                    </div>
            </div>
            </form>
        </div>
        <footer>
            <p>Developer by: Marcos and Rafael J.</p>
        </footer>
    </div>

    <script>
        var fm = document.forms[0];
        var el = fm.elements;
        var t1 = document.querySelector("#t1");
        var t2 = document.querySelector("#t2");
        document.querySelector("#emp").hidden = true;
        document.querySelector("#espec-1").hidden = true;
        document.querySelector("#espec-2").hidden = true;
        el[3].hidden = true;
        el[4].hidden = true;

        function func() {
            var type = document.getElementsByName("bebida");

            if (type[0].checked) {
                alert("Vinho");
                el[0].value = "Vinho";
                el[3].name = "safra";
                el[4].name = "tipo";
                el[3].hidden = false;
                el[4].hidden = false;
                t1.innerHTML = "Safra";
                t2.innerHTML = "Tipo";
                document.querySelector("#espec-1").hidden = false;
                document.querySelector("#espec-2").hidden = false;
                document.querySelector("#emp").hidden = true;
                document.querySelector("#t1").hidden = false;
                document.querySelector("#t2").hidden = false;
            } else if (type[1].checked) {
                alert("Suco");
                el[0].value = "Suco";
                el[3].name = "sabor";
                el[3].hidden = false;
                el[4].hidden = true;
                t1.innerHTML = "Sabor";
                document.querySelector("#espec-1").hidden = false;
                document.querySelector("#emp").hidden = true;
                document.querySelector("#t1").hidden = false;
                document.querySelector("#t2").hidden = true;
            } else if (type[2].checked) {
                alert("Refrigerante");
                el[0].value = "Refrigerante";
                el[3].hidden = true;
                el[4].hidden = true;
                document.querySelector("#emp").hidden = false;
                document.querySelector("#espec-1").hidden = true;
                document.querySelector("#espec-2").hidden = true;
                document.querySelector("#t1").hidden = true;
                document.querySelector("#t2").hidden = true;
            }
        }
    </script>
</body>

</html>