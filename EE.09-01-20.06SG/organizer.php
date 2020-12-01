<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Organizer</title>
    <link rel="stylesheet" href="styl6.css">
</head>
<body>
    <?php
        if(isset($_POST['wydarzenie'])) {
            //wysłano wydarzenie do dodania
            $db = new mysqli('localhost', 'root', '', 'egzamin6');
            $wydarzenie = $_POST['wydarzenie'];
            $sql = "UPDATE zadania SET wpis = '$wydarzenie' WHERE dataZadania = '2020-08-27'";
            $db->query($sql);
            $db->close();
        }
    ?>
    <header>
        <div id="baner1">
            <h2>MÓJ ORGANIZER</h2>
        </div>
        <div id="baner2">
            <form action="organizer.php" method="POST">
                <label for="wydarzenieID">Wpis wydarzenia:</label>
                <input type="text" name="wydarzenie" id="wydarzenieID">
                <input type="submit" value="ZAPISZ">
            </form>
        </div>
        <div id="baner3">
            <img src="logo2.png" alt="Mój organizer">
        </div>
    </header>
    <main>
    <?php
    //skrypt1
        $sql = "SELECT dataZadania, miesiac, wpis FROM `zadania` WHERE miesiac = 'sierpien'";
        $db = new mysqli('localhost', 'root', '', 'egzamin6');
        $result = $db->query($sql);
        while($row = $result->fetch_assoc()) {
            $data = $row['dataZadania'];
            $miesiac = $row['miesiac'];
            $wpis = $row['wpis'];
            echo '<div>';
            echo "<h6>$data, $miesiac</h6>";
            echo "<p>$wpis</p>";
            echo '</div>';
        }
    ?>
    </main>
    <footer>
    <?php
    //skrypt2
        $sql = "SELECT miesiac, rok FROM `zadania` WHERE dataZadania = '2020-08-01'";
        $result = $db->query($sql);
        $row = $result->fetch_assoc();
        $miesiac = $row['miesiac'];
        $rok = $row['rok'];
        echo "<h1>miesiąc: $miesiac, rok: $rok</h1>";
        $db->close();
    ?>
    <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>
</html>