<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
        require_once "Ave.php";
        require_once "Mamifero.php";
        require_once "Peixe.php";
        require_once "Reptil.php";

        require_once "Canguru.php";
        require_once "Tartaruga.php";

        $a = new Ave();
        $m = new Mamifero();
        $p = new Peixe();
        $r = new Reptil();

        $a->setPeso(15.7);
        $a->setIdade(2);
        $a->setMembros(8);
        $a->setCorPena("Azul");
        $a->alimentar();
        $a->locomover();
        $a->fazerNinho();
        $a->emitirSom();


        $r->setPeso(20.7);
        $r->setIdade(2);
        $r->setMembros(8);
        $r->setCorEscama("Preto");
        $r->alimentar();
        $r->locomover();
        $r->emitirSom();

        $p->locomover();
        $m->locomover();

        $c = new Canguru();
        $t = new Tartaruga();

        $c->locomover();
        $t->locomover();


    ?>
</body>
</html>