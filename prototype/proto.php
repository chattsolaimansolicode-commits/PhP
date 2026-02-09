<!DOCTYPE html>
<html>

<head>
    <title>PHP Calculator</title>
</head>

<body>

    <h2>Calculator</h2>

    <form method="POST">
        <input type="number" name="num1">

        <select name="op">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>

        <input type="number" name="num2">
        <br><br>

        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $errors = [];
        if (empty($_POST["num1"]) || !is_numeric($_POST["num1"])) {
            $errors[] = "Please enter a valid first number.";
        }

        if (empty($_POST["num2"]) || !is_numeric($_POST["num2"])) {
            $errors[] = "Please enter a valid second number.";
        }

        if (empty($_POST["op"])) {
            $errors[] = "Please select an operation.";
        }
        if (empty($errors)) {

            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $op   = $_POST["op"];

            if ($op == "+") {
                echo "Result = " . ($num1 + $num2);
            } elseif ($op == "-") {
                echo "Result = " . ($num1 - $num2);
            } elseif ($op == "*") {
                echo "Result = " . ($num1 * $num2);
            } elseif ($op == "/") {
                if ($num2 == 0) {
                    echo "Error: division by zero";
                } else {
                    echo "Result = " . ($num1 / $num2);
                }
            }
        } else {

            foreach ($errors as $error) {
                echo $error . "<br>";
            }
        }
    }

    ?>

</body>

</html>