<?php



    require_once "baza.php";


    if (  !isset($_POST["email"]) || empty($_POST["email"])  ) {
        die("niste prosledili email");
    }


    $proverEmaila = mysqli_real_escape_string( $baza, $_POST["email"]);


    $rezultat = $baza->query("SELECT * FROM korisnici WHERE email LIKE '%$proverEmaila%'");



    if ( $rezultat->num_rows >= 1 ) {
        die("Pronasli smo ".$rezultat->num_rows." korisnika sa tim podacima");
    } else {
        die("Nismo pronasli korisnika sa tim podacima");
    }