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
    
   for ($i = 1 ; $i <= 20 ;$i++){
    echo $i ."<br>";

   }
   $i = 1;
   for($i ){

   }
    ?>
    

</body>

</html>