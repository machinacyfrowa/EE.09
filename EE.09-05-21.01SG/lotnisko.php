<?php
if(!isset($_COOKIE['lotnisko'])) {
    $inTwoHours = time() + 60*60*2; //obecny czas + 2 godziny
    setcookie("lotnisko", "test", $inTwoHours);
}
    
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Port Lotniczy</title>
    <link rel="stylesheet" href="styl5.css">
</head>
<body>
    <header>
        <div id="banerLeft">
            <img src="zad5.png" alt="logo lotnisko">
        </div>
        <div id="banerCenter">
            <h1>Przyloty</h1>
        </div>
        <div id="banerRight">
            <h3>przydatne linki</h3>
            <a href="kwerendy.txt" target="_blank">Pobierz...</a>
        </div>
    </header>
    <main>
        <table>
            <tr>
                <th>czas</th>
                <th>kierunek</th>
                <th>numer rejsu</th>
                <th>status</th>
            </tr>
            <!-- skrypt 1 -->
            <?php
            $db = new mysqli("localhost", "root", "", "egzamin");
            $q = "SELECT czas, kierunek, nr_rejsu, status_lotu FROM przyloty ORDER BY czas ASC";
            $result = $db->query($q);
            while($row = $result->fetch_assoc()) {
                $czas = $row['czas'];
                $kierunek = $row['kierunek'];
                $nr_rejsu = $row['nr_rejsu'];
                $status = $row['status_lotu'];
                echo "<tr>";
                echo "<td>$czas</td>";
                echo "<td>$kierunek</td>";
                echo "<td>$nr_rejsu</td>";
                echo "<td>$status</td>";
                echo "</tr>";
            }
            $db->close();
            ?>
        </table>
    </main>
    <footer>
        <div id="footerLeft">
            <!-- skrypt 2 -->
            <?php
            //var_dump($_COOKIE);
            //sprawdź czy istnieje ciasteczko
            if(isset($_COOKIE['lotnisko'])) {
                echo "<p class=\"italic\">Witaj ponownie na stronie lotniska</p>";
            } else {
                //nie ma ciasteczka lub zostało dopiero utworzone
                echo "<p class=\"bold\">Dzień dobry! Strona lotniska używa ciasteczek</p>";
            }
            ?>
        </div>
        <div id="footerRight">
            Autor: 00000000000
        </div>
    </footer>
</body>
</html>