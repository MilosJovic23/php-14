




<!doctype html>
<html lang="en">
    <head>
        <title>Homework Php</title>
    </head>
    <body>
    <h2>Popunite polja kako biste dodali proizvod u bazu podataka</h2>
    <form action="modeli/DomaciDodavanjeProivoda.php" method="GET">
        <input  name="ime" placeholder="ime" type="text" required>
        <input  name="opis" placeholder="opis" type="text" required>
        <input  name="cena" placeholder="cena"  type="number" required>
        <input  name="slika" placeholder="slika" type="text" required>
        <input  name="kolicina" placeholder="kolicina" type="number" required>
        <button type="submit">dodaj proizvod</button>
    </form>
    </body>
</html>