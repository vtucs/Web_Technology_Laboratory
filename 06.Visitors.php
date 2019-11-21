<!--
6. Write a PHP program to keep track of the number of visitors visiting the web page
and to display this count of visitors, with proper headings.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Visitors</title>
</head>

<body>
<?php
$file_path = "count.txt";
$count = 0;
if (file_exists($file_path)) {
    $myFile = fopen($file_path, "r");
    $count = fread($myFile, filesize($file_path));
    fclose($myFile);
}
$count = $count + 1;
$myFile = fopen($file_path, "w");
fwrite($myFile, $count);
echo "<h1>Visitors: " . $count . "</h1>"
?>
</body>
</html>
