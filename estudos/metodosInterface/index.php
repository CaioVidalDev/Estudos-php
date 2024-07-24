<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContaBanco</title>
</head>
<body>
    <?php
        require_once "ContaBanco.php";

        $p1 = new ContaBanco();
        $p2 = new ContaBanco();

        $p1->abrirConta("CC");
        $p1->setDono("Jubileu");
        $p2->abrirConta("CP");
        $p2->setDono("Maria");

        $p1->depositar(300);
        $p2->depositar(500);

        $p2->sacar(100);
        
        $p1->pagarMensal();
        $p2->pagarMensal();

        $p1->fecharConta();
        $p2->fecharConta();

        print_r($p1);
        print_r($p2);
    ?>
</body>
</html>