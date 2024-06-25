<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança bebida</title>
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
        if($_POST['preco'] < 25){
            $v->setPromo([false]);
        }
        $v->VerificarPreco();
    } elseif ($_POST["bebida"] == "Suco") {
        $s->setBebida($_POST['bebida']);
        $s->setNome($_POST['nome']);
        $s->setPreco($_POST['preco']);
        $s->setSabor($_POST['sabor']);
        $s->MostrarBebida();
        if($_POST['preco'] < 2.5){
            $s->setPromo([false]);
        }
        $s->VerificarPreco();
    } elseif ($_POST["bebida"] == "Refrigerante") {
        $r->setBebida($_POST['bebida']);
        $r->setNome($_POST['nome']);
        $r->setPreco($_POST['preco']);
        $r->setRetornavel($_POST['retornavel']);
        $r->MostrarBebida();
        if($_POST['preco'] < 5){
            $r->setPromo([false]);
        }
        $r->VerificarPreco();
    }
    ?>
</pre>
</body>

</html>
