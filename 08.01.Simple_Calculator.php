<!--
8. Write the PHP programs to do the following:
a. Implement simple calculator operations.
b. Find the transpose of a matrix.
c. Multiplication of two matrices.
d. Addition of two matrices.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>

<body>
<form method="post">
    <label>
        Input 1:
        <input type="text" name="num1"/>
    </label> <br>
    <label>
        Input 2:
        <input type="text" name="num2"/>
    </label> <br>
    <input type="submit" value="Calculate">

</form>
<?php
if (isset($_POST['num1']) and isset($_POST['num2'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    if (is_numeric($num1) and is_numeric($num2)) {
        echo "<table>";
        echo "<tr><td> Addition: </td><td>" . ($num1 + $num2) . "</td>";
        echo "<tr><td> Subtraction: </td><td>" . ($num1 - $num2) . "</td>";
        echo "<tr><td> Multiplication: </td><td>" . ($num1 * $num2) . "</td>";
        echo "<tr><td>Division: </td><td>" . ($num1 / $num2) . "</td>";
        echo "</table>";
    } else {
        echo "<script type='text/javascript' > alert('Invalid Numbers');</script>";
    }
}
?>
</body>
</html>
