<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <header>
        <h1>BIURO PODRÓŻY</h1>
    </header>
    <div id="lewy">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div id="srodkowy">
        <h2>GALERIA</h2>
        <?php
        //skrypt1
        $db = new mysqli('localhost', 'root', '', 'egzamin3');
        $db->set_charset('utf8');
        $sql =  "SELECT nazwaPliku, podpis FROM `zdjecia` ORDER BY podpis ASC";
        $result = $db->query($sql);
        
        //echo $db->error;
        while($row = $result->fetch_assoc()) {
            $src = $row['nazwaPliku'];
            $alt = $row['podpis'];
            echo "<img src=\"$src\" alt=\"$alt\">";
        }
        ?>
    </div>
    <div id="prawy">
        <h2>PROMOCJE</h2>
        <table>
            <tr>
                <td>Jesień</td>
                <td>Grupa 4+</td>
                <td>Grupa 10+</td>
            </tr>
            <tr>
                <td>5%</td>
                <td>10%</td>
                <td>15%</td>
            </tr>
        </table>
    </div>
    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>
        <?php
        //skrypt2
        $sql = "SELECT id,dataWyjazdu,cel,cena FROM `wycieczki` WHERE dostepna = 1";
        $result = $db->query($sql);
        while($row = $result->fetch_assoc()) {
            $id = $row['id'];
            $dataWyjazdu = $row['dataWyjazdu'];
            $cel = $row['cel'];
            $cena = $row['cena'];
            echo "<p>$id. $dataWyjazdu, $cel, cena: $cena</p>";
        }
        $db->close();
        ?>
        <br>
    </div>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>