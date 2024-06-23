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
        $v->setPromo($_POST['promo']);
        $v->setSafra($_POST['safra']);
        $v->setTipo($_POST['tipo']);
        $v->MostrarBebida();
    } elseif ($_POST["bebida"] == "Suco") {
        $s->setBebida($_POST['bebida']);
        $s->setNome($_POST['nome']);
        $s->setPreco($_POST['preco']);
        $s->setPromo($_POST['promo']);
        $s->setSabor($_POST['sabor']);
        $s->MostrarBebida();
        if($_POST['preco'] < 25){
            $v->setPromo[true];
        }
    } elseif ($_POST["bebida"] == "Refri") {
        $s->setBebida($_POST['bebida']);
        $s->setNome($_POST['nome']);
        $s->setPreco($_POST['preco']);
        $s->setPromo($_POST['promo']);
        $r->setRetornavel(isset($_POST['retornavel']));
        $r->MostrarBebida();
        if($_POST['preco'] < 2.5){
            $v->setPromo[true];
        }
    }

    ?>
</pre>
</body>

</html>
