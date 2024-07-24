<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "ControleRemoto.php";

    $c = new ControleRemoto();
    $c->ligar();
    $c->abrirMenu();

    $c->maisVolume();
    $c->menosVolume();

    $c->ligarMudo();
    $c->desligarMudo();

    $c->desligar();
    ?>
</body>
</html>