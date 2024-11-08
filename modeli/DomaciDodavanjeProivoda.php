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



    $ime = $_GET["ime"];
    $opis = $_GET["opis"];
    $cena = $_GET["cena"];
    $slika = $_GET["slika"];
    $kolicina = $_GET["kolicina"];


    var_dump($_GET);

    $baza->query("INSERT INTO proizvodi(ime,opis,cena,slika,kolicina) VALUES('$ime','$opis','$cena','$slika','$kolicina')");




?>