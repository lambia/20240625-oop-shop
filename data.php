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

$prodotti = [
    $prodottoIntegratore, //<--- ho dovuto prima creare, perchè ho bisogno di scrivere il peso (v. sopra)
    $prodottoCuccia, //<--- ho dovuto prima creare, perchè ho bisogno di scrivere le dimensioni (v. sopra)
    new Gioco("Pallina rossa", 11, $categoryGatto, "spugna"), //posso crearlo senza variabile di appoggo
    new Prodotto("Guinzaglio K-9", 5, $categoryCane) //posso crearlo senza variabile di appoggo
];