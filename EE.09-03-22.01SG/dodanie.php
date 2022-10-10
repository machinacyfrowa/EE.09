<?php
//var_dump($_REQUEST);
$nrKaretki = $_REQUEST['nrKaretki'];
$ratownik1 = $_REQUEST['ratownik1'];
$ratownik2 = $_REQUEST['ratownik2'];
$ratownik3 = $_REQUEST['ratownik3'];

$q = "INSERT INTO `ratownicy` 
        ( `nrKaretki`, `ratownik1`, `ratownik2`, `ratownik3`)
         VALUES 
        ( '$nrKaretki', '$ratownik1', '$ratownik2', '$ratownik3')";

$db = new mysqli('localhost', 'root', '', 'ee09');
#$db = mysqli_connect('localhost', 'root', '', 'ee09');

$db->query($q);
#mysqli_query($db, $q);

echo "Do bazy zostało wysłane zapytanie: $q";
$db->close();
#mysqli_close($db);
?>