<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require_once "Pessoa.php";
        require_once "Livro.php";

        $p[0] = new Pessoa("Pedro", 40, "M");
        $p[1] = new Pessoa("Luan", 16, "F");

        $l[0] = new Livro("O Codigo", "Caio Vilar", 300, $p[0]);
        $l[1] = new Livro("O Codigo", "Luan", 300, $p[1]);

        $l[0]->abrir();
        $l[0]->folhear(80);
        $l[0]->avancarPag();
        $l[0]->voltarPag();
        $l[0]->detalhes();
    ?>
    ?>
</body>
</html>