<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--action = plik php !-->
    <form action="index.php" method="post">
        <label>ilość:</label><br>
        <input type="text" name="ilosc"><br>
        <input type="submit" value="oblicz">
    </form>
</body>

<?php
    //$_POST I $_GET tablica z wartosciami
    //$_POST jest bardziej bezpieczny
    //wartości $_GET wyświetlają się w linku
    $item = "pizza";
    $cena = 30.99;
    $ilosc = $_POST["ilosc"];
    $total = $ilosc * $cena;

    echo "Zamówiłeś {$ilosc} x {$item}<br>";
    echo "Musisz zapłacić {$total}zł";
?>