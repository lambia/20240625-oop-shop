<?php

include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Gioco.php";
include __DIR__ . "/models/Cuccia.php";
include __DIR__ . "/models/Cibo.php";

$categoryCane = new Categoria("Per Cani", "Per canidi come cani, lupi e coyote");
$categoryGatto = new Categoria("Per Gatti", "Per felini come gatti, leoni e tigri della malesia");

$prodottoIntegratore = new Cibo("Integratore B12", 15,  $categoryCane);
$prodottoIntegratore->peso = "12kg";

$prodottoCuccia = new Cuccia("Cuccia Gialla", 10, $categoryCane);
$prodottoCuccia->dimensioni = "12x45x120 cm";

$prodottoPallina = new Gioco("Pallina rossa", 11, $categoryGatto, "spugna");

$prodottoGuinzaglio = new Prodotto("Guinzaglio K-9", 5, $categoryCane);

$prodotti = [
    $prodottoIntegratore,
    $prodottoCuccia,
    $prodottoPallina,
    $prodottoGuinzaglio
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Shop</title>
</head>

<body>

    <?php
        foreach ($prodotti as $prodotto) {
            echo "<p>" . $prodotto->getDescrizione() . "</p>";
        }
    ?>

</body>

</html>