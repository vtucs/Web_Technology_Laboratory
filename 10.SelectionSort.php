<!--
10. Write a PHP program to sort the student records which are stored in the database
using selection sort.
-->

<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
$domain = "localhost";
$username = "root";
$password = "";
$dbname = "weblab";
$a = [];

$conn = mysqli_connect($domain, $username, $password, $dbname);

if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);
$sql = "SELECT * FROM student";

$result = $conn->query($sql);
echo "<br>";
echo "<h2>BEFORE SORTING</h2>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>Name</th><th>Address</th></tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["usn"] . "</td>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["address"] . "</td></tr>";
        array_push($a, $row["usn"]);
    }
} else
    echo "Table is Empty";
echo "</table>";

$n = count($a);
for ($i = 0; $i < ($n - 1); $i++) {
    $pos = $i;
    for ($j = $i + 1; $j < $n; $j++) {
        if ($a[$pos] > $a[$j])
            $pos = $j;
    }
    if ($pos != $i) {
        $temp = $a[$i];
        $a[$i] = $a[$pos];
        $a[$pos] = $temp;
    }
}
$c = [];
$d = [];
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        for ($i = 0; $i < $n; $i++) {
            if ($row["usn"] == $a[$i]) {
                $c[$i] = $row["name"];
                $d[$i] = $row["address"];
            }
        }
    }
}
echo "<br>";
echo "<h2>AFTER SORTING</h2>";
echo "<table border='2'>";
echo "<tr>";
echo "<th>USN</th><th>NAME</th><th>Address</th></tr>";
for ($i = 0; $i < $n; $i++) {
    echo "<tr>";
    echo "<td>" . $a[$i] . "</td>";
    echo "<td>" . $c[$i] . "</td>";
    echo "<td>" . $d[$i] . "</td></tr>";
}
echo "</table>";
$conn->close();
?>
</body>
</html>
