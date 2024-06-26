<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança bebida</title>
    <!-- Link fonte -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: Titulos;

            src: url("fontes/Fifties\ Movies.ttf");
        }

        * {
            margin: 0;
            padding: 0;
        }

        body {
            height: 100vh;
            background: rgb(170, 200, 167);
            background: linear-gradient(187deg,
                    rgba(170, 200, 167, 1) 0%,
                    rgba(233, 255, 194, 1) 100%);
            background-repeat: no-repeat;
            background-size: contain;
        }

        pre{
            font-family: "Raleway", sans-serif;
            padding: 10px;
        }
    </style>
</head>

<body>
    <pre>
    <?php
    require_once 'Bebida.php';
    require_once 'Vinho.php';
    require_once 'Suco.php';
    require_once 'Refri.php';

    //Objetos
    $b = new Bebida();
    $v = new Vinho();
    $s = new Suco();
    $r = new Refri();

    if ($_POST["bebida"] == "Vinho") {
        $v->setBebida($_POST['bebida']);
        $v->setNome($_POST['nome']);
        $v->setPreco($_POST['preco']);
        $v->setSafra($_POST['safra']);
        $v->setTipo($_POST['tipo']);
        $v->MostrarBebida();
        if ($_POST['preco'] < 25) {
            $v->setPromo([false]);
        }
        $v->VerificarPreco();
    } elseif ($_POST["bebida"] == "Suco") {
        $s->setBebida($_POST['bebida']);
        $s->setNome($_POST['nome']);
        $s->setPreco($_POST['preco']);
        $s->setSabor($_POST['sabor']);
        $s->MostrarBebida();
        if ($_POST['preco'] < 2.5) {
            $s->setPromo([false]);
        }
        $s->VerificarPreco();
    } elseif ($_POST["bebida"] == "Refrigerante") {
        $r->setBebida($_POST['bebida']);
        $r->setNome($_POST['nome']);
        $r->setPreco($_POST['preco']);
        $r->setRetornavel($_POST['retornavel']);
        $r->MostrarBebida();
        if ($_POST['preco'] < 5) {
            $r->setPromo([false]);
        }
        $r->VerificarPreco();
    }
    ?>
</pre>
</body>

</html>