<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança Bebida</title>
</head>
<body>

<pre>
    <?php
        require_once 'Bebida.php';
        require_once 'Vinho.php';
        require_once 'Suco.php';
        require_once 'Refrigerante';

        //Objetos
        $v = new vinho();
        $s = new suco();
        $r = new refri();

        if($_POST["bebida"] == "Vinho"){
            $v->setBebida($_POST['bebida']);
            $v->setNome($_POST['nome']);
            $v->setPreco($_POST['preco']);
            $v->setPromo($_POST['promo']);
        }

    ?>
</pre>