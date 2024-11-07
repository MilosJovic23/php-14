<?php


    require_once "baza.php";

    if (  !isset($_POST["email"]) || empty($_POST["email"])  ) {
        die("niste prosledili email");
    }

    if (  !isset($_POST["password"])  || empty($_POST["password"])  ) {
        die("niste prosledili lozinku");
    }


    $email = $_POST["email"];
    $password = password_hash($_POST["password"],PASSWORD_BCRYPT);


    $proveraEmaila = $baza->query("SELECT * FROM korisnici WHERE email='$email'");

    if( $proveraEmaila->num_rows == 1 ){
        die("U nasoj bazi postoji korisnik sa tom email-adresom");
    }
    else {
        $baza->query("INSERT INTO korisnici(email,sifra) VALUES('$email','$password')");
    }



