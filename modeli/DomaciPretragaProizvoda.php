<?php



    require_once "baza.php";


    $pretraga = mysqli_real_escape_string( $baza,$_GET["pretraga"] ) ;

    var_dump($pretraga);

    $rezultat = $baza->query("SELECT * FROM proizvodi WHERE ime LIKE '%$pretraga%' OR opis LIKE '%$pretraga%'");

    var_dump($rezultat);

    if( $rezultat->num_rows > 0 ){
        $rezultatPretrage = $rezultat->fetch_all(MYSQLI_ASSOC);
    }
    else {
        die("nismo pronasli porizvod sa unetom pretragom");
    }

    var_dump($rezultatPretrage);


?>


<!doctype html>
<html lang="en">
    <head>
        <title>Homework 5</title>
    </head>
    <body>
        <div>

            <table>
                <thead>
                <tr>
                    <th>ime</th>
                    <th>opis</th>
                    <th>cena</th>
                    <th>kolicina</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ( $rezultatPretrage as $proizvodi => $proizvod ): ?>
                    <tr>
                        <td><?= $proizvod["ime"];  ?></td>
                        <td><?= $proizvod["opis"];  ?></td>
                        <td><?= $proizvod["cena"];  ?></td>
                        <td><?= $proizvod["kolicina"];  ?></td>
                    </tr>
                <?php endforeach; ?>


                </tbody>
            </table>
        </div>
    </body>
</html>
