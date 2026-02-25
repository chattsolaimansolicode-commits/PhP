<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1> exercice </h1>
    <form method="post">
        <label> numero 1</label>
        <input type="text" name="n1" required><br><br>
        <label> numero 2</label>
        <input type="text" name="n2"><br><br>
        <button type="submit"> ok </button>

    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $numero1 = $_POST["n1"];
        $numero2 = $_POST["n2"];
        if (!empty($numero1)  && !empty($numero2)){
            if ($numero1 >=  $numero2) {
                echo "le max est " .   $numero1;
            } else {
                echo "le max est" . $numero2;
            }
        }
    }
    ?>

</body>

</html>