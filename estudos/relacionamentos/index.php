<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "Lutador.php";
        $l = array();
        $l[0] = new Lutador("Caio Vidal", "Brasil", 20, 1.75, 80.1, 11, 2, 1);
        $l[1] = new Lutador("Luan", "EUA", 16, 1.70, 70.1, 9, 5, 0);

        $l[1]->perderLuta();
        $l[0]->ganharLuta();
        $l[1]->empatarLuta();

        $l[0]->status();
        $l[1]->apresentar();
    ?>
</body>
</html>