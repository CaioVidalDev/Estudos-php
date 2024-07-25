<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
        require_once "Visitante.php";
        require_once "Aluno.php";
        require_once "Bolsista.php";

        $v = new Visitante();
        $v->setIdade(33);
        $v->setNome("Juvenal");

        $al = new Aluno();
        $al->setNome("Robson");
        $al->setCurso("Matematica");
        $al->setMatricula("1111");
        $al->pagarMensalidade();

        $b = new Bolsista();
        $b->setMatricula(1222);
        $b->setNome("Roma");
        $b->setIdade(12);
        $b->renovarBolsa();


        print_r($al);
        print_r($v);

    ?>
</body>
</html>