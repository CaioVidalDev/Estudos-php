<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
       
        require_once "Aluno.php";
        require_once "Funcionario.php";
        require_once "Professor.php";

        $p1 = new Pessoa();
        $p2 = new Aluno();
        $p3 = new Funcionario();
        $p4 = new Professor();

        $p1->setNome("Joao");
        $p2->setNome("Maria");
        $p3->setNome("Madson");
        $p4->setNome("Luan");

        $p2->setCurso("Informatica");
        $p3->setSetor("Estoque");
        $p4->setSalario(3000);

        $p1->setSexo("M");
        $p4->setSexo("F");

        print_r($p1);
        print_r($p2);
        print_r($p3);
        print_r($p4);
    ?>
</body>
</html>