<?php



    require_once "baza.php";


    if (  !isset($_POST["email"]) || empty($_POST["email"])  ) {
        die("niste prosledili email");
    }


    $proverEmaila = $_POST["email"];


    $rezultat = $baza->query("SELECT * FROM korisnici WHERE email = '$proverEmaila'");


    if ( $rezultat->num_rows >= 1 ) {
        die("Pronasli korisnika sa tim emailom");
    } else {
        die("Nismo pronasli korisnika sa tim emailom");
    }