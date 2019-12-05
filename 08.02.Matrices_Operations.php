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
    <title>Matrices Operations</title>
</head>

<body>
<?php
$a = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));
$b = array(array(7, 8, 9), array(4, 5, 6), array(1, 2, 3));
$m = count($a);
$n = count($a[0]);
$p = count($b);
$q = count($b[0]);

function print_matrix($mat)
{
    $rows = count($mat);
    $cols = count($mat[0]);
    for ($row = 0; $row < $rows; $row++) {
        for ($col = 0; $col < $cols; $col++)
            echo " " . $mat[$row][$col];
        echo "<br/>";
    }
}

echo "The First Matrix	:" . "<br/>";
print_matrix($a);

echo "The Second Matrix	:" . "<br/>";
print_matrix($b);

echo "The Transpose for the First Matrix is:" . "<br/>";
$trans = array();
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++)
        $trans[$i][$j] = $a[$j][$i];
}
print_matrix($trans);

if (($m === $p) and ($n === $q)) {
    $add = array();
    echo "The Addition of Matrices is:" . "<br/>";
    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $n; $j++)
            $add[$i][$j] = $a[$i][$j] + $b[$i][$j];
    }
    print_matrix($add);
}

if ($n === $p) {
    echo " The Multiplication of Matrices: <br/>";
    $result = array();
    for ($i = 0; $i < $m; $i++) {
        for ($j = 0; $j < $q; $j++) {
            $result[$i][$j] = 0;
            for ($k = 0; $k < $n; $k++)
                $result[$i][$j] += $a[$i][$k] * $b[$k][$j];
        }
    }
    print_matrix($result);
}
?>
</body>
</html>
