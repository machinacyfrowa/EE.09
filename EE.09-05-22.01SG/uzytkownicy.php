<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal społecznościowy</title>
    <link rel="stylesheet" href="styl5.css">
</head>

<body>
    <?php
    $db = new mysqli('localhost', 'root', '', 'portal');
    ?>
    <header>
        <div class="left">
            <h2>Nasze osiedle</h2>
        </div>
        <div class="right">
            <!-- skrypt 1 -->
            <?php
            $q = "SELECT count(*) FROM dane";
            $result = $db->query($q);
            $row = $result->fetch_row();
            $count = $row[0];
            echo "<h5>Liczba 
                użytkowników portalu: $count</h5>";
            ?>
        </div>
    </header>
    <main>
        <div class="left">
            <h3>Logowanie</h3>
            <form action="uzytkownicy.php" method="post">
                <label for="login">Login:</label><br>
                <input type="text" name="login" id="login"><br>
                <label for="password">Hasło:</label><br>
                <input type="password" name="password" id="password"><br>
                <input type="submit" value="Zaloguj">
            </form>
        </div>
        <div class="right">
            <h3>Wizytówka</h3>
            <div class="card">
                <!-- skrypt 2 -->
                <?php
                //sprawdz czy w ogóle wysłano formularz
                if (isset($_POST['login']) && isset($_POST['password'])) {
                    $login = $_POST['login'];
                    $password = $_POST['password'];
                    //sprawdz czy pola są niepuste
                    if ($login != "" && $password != "") {
                        //pola nie sa puste
                        $passwordHash = sha1($password);

                        $q = "SELECT * FROM uzytkownicy WHERE login = \"$login\"";
                        $result = $db->query($q);
                        if ($result->num_rows == 0) {
                            //brak loginu
                            echo "Login nie istnieje";
                        } else {
                            //login istnieje, sprawdz haslo
                            $row = $result->fetch_assoc();
                            if ($passwordHash == $row['haslo']) {
                                //haslo prawidłowe
                                $q = "SELECT uzytkownicy.login, dane.rok_urodz, 
                                        dane.przyjaciol, dane.hobby, dane.zdjecie 
                                        FROM `uzytkownicy` 
                                        LEFT JOIN dane ON uzytkownicy.id = dane.id 
                                        WHERE login=\"$login\"";
                                $result = $db->query($q);
                                //opcjonalne
                                if($result->num_rows != 1)
                                    die("Nastąpiło coś bardzo niespodziewanego");
                                $row = $result->fetch_assoc();
                                $rok_urodz = $row['rok_urodz'];
                                $przyjaciol = $row['przyjaciol'];
                                $hobby = $row['hobby'];
                                $zdjecie = $row['zdjecie'];
                                echo "<img src=\"$zdjecie\" alt=\"osoba\">";
                                $wiek = 2022 - $rok_urodz;
                                echo "<h4>$login ($wiek)</h4>";
                                echo "<p>$hobby</p>";
                                echo "<h1><img src=\"icon-on.png\">$przyjaciol</h1>";
                                echo "<a href=\"dane.html\">";
                                echo "<button>Więcej informacji</button>";
                                echo "</a>";

                            } else {
                                //hasło nieprawidłowe
                                echo "Hasło nieprawidłowe";
                            }
                        }
                    }
                }
                ?>
            </div>

        </div>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
    <?php $db->close(); ?>
</body>

</html>