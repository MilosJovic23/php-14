<?php


    require_once "baza.php";



    if ( !isset( $_GET["ime"]) || empty( $_GET["ime"] ) ) {
        die("niste prosledili ime");
    }
    if ( !isset( $_GET["opis"]) || empty( $_GET["opis"] ) ) {
        die("niste prosledili opis");
    }
    if ( !isset( $_GET["cena"]) || empty( $_GET["cena"] ) ) {
        die("niste prosledili cenu");
    }
    if ( !isset( $_GET["slika"]) || empty( $_GET["slika"] ) ) {
        die("niste prosledili url za sliku");
    }
    if ( !isset( $_GET["kolicina"]) || empty( $_GET["kolicina"] ) ) {
        die("niste prosledili kolicinu");
    }



    $ime = mysqli_real_escape_string($baza, $_GET["ime"]) ;
    $opis = mysqli_real_escape_string($baza,$_GET["opis"]);
    $cena = mysqli_real_escape_string($baza,$_GET["cena"]);
    $slika = mysqli_real_escape_string($baza,$_GET["slika"]);
    $kolicina = mysqli_real_escape_string($baza,$_GET["kolicina"]);



    $baza->query("INSERT INTO proizvodi(ime,opis,cena,slika,kolicina) VALUES('$ime','$opis','$cena','$slika','$kolicina')");




?>