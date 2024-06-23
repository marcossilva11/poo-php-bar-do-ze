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
        <div class="header-box">
            <header>
                <h1>Bar do zé</h1>
            </header>
        </div>
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
                    <p><input type="hidden" name="pessoa" value=""></p>
                    <div class="input-box">
                        <label for="nome">Nome da bebida: </label>
                        <input type="text" name="nome" id="nome">
                    </div>
                    <div class="input-box">
                        <label for="preco">Preço da bebida: </label>
                        <input type="text" name="preco" id="preco">
                    </div>
                    <!--Especialização -->
                    <p id="t1"></p>
                    <p><input type="text" name=""></p>
                    <p id="t2"></p>
                    <p><input type="text" name=""></p>

                    <div id="emp">
                        <p>Está Empregado?</p>
                        <p><input type="radio" name="empre" value="Sim">Sim
                            <input type="radio" name="empre" value="Não">Não
                        </p>
                    </div>
                    <input type="submit" name="botao" value="Cadastrar">
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
        el[5].hidden = true;
        el[6].hidden = true;

        function func() {
            var type = document.getElementsByName("type");

            if (type[0].checked) {
                alert("Vinho");
                el[0].value = "Vinho";
                el[5].name = "safra";
                el[6].name = "tipo";
                el[5].hidden = false;
                el[6].hidden = false;
                t1.innerHTML = "Safra";
                t2.innerHTML = "Tipo";
            } else if (type[1].checked) {
                alert("Suco");
                el[0].value = "Suco";
                el[5].name = "sabor";
                el[5].hidden = false;
                el[6].hidden = false;
                t1.innerHTML = "Sabor";
            } else if (type[2].checked) {
                alert("Refrigerante");
                el[0].value = "Refrigerante";
                el[5].name = "retornavel";
                el[5].hidden = false;
                t1.innerHTML = "retornavel";
                document.querySelector("#emp").hidden = false;
            }
        }
    </script>
</body>

</html>