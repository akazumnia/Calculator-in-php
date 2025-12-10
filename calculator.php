<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Podaj dwie liczby a i b</h1>
    <form action="kalkulator.php" method="POST">
        <label>Liczba 1:</label>
        <input type="number" step="any" name="a" required><br><br>

        <label>Liczba 2:</label>
        <input type="number" step="any" name="b" required><br><br>

        <label>Wybierz operację:</label>
        <input type="radio" name="op" value="+" required>Dodawanie<br>
        <input type="radio" name="op" value="-" required>Odejmowanie<br>
        <button type="submit">Oblicz</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $a = $_POST['a'];
        $b = $_POST['b'];
        $op = $_POST['op'];

        if ($op == '+') {
            $wynik = $a + $b;
            echo "<h3>Wynik: $a + $b = $wynik</h3>";
        }

        if ($op == '-') {
            $wynik = $a - $b;
            echo "<h3>Wynik: $a - $b = $wynik</h3>";
        }
    }
    ?>
</body>
</html>
