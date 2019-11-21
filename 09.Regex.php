<!--
9. Write a PHP program named states.py that declares a variable states with value
"Mississippi Alabama Texas Massachusetts Kansas". write a PHP program that does
the following:

a. Search for a word in variable states that ends in xas. Store this word in element
0 of a list named statesList.

b. Search for a word in states that begins with k and ends in s. Perform a case insensitive
comparison. [Note: Passing re.Ias a second parameter to method
compile performs a case-insensitive comparison.] Store this word in element1
of statesList.

c. Search for a word in states that begins with M and ends in s. Store this
word in element 2 of the list.

d. Search for a word in states that ends in a. Store this word in element 3 of the
list.
-->

<!DOCTYPE html>
<html>
<head>
    <title>Regex</title>
</head>

<body>
<?php
$string = "Mississippi Alabama Texas Massachusetts Kansas";
$statesList = [];
$states = explode(' ', $string);
echo "Original String Array :<br>";
foreach ($states as $i => $value)
    print("STATES[$i]=$value<br>");

foreach ($states as $state) {
    if (preg_match('/xas$/', ($state)))
        $statesList[0] = ($state);

    if (preg_match('/^k.*s$/i', ($state)))
        $statesList[1] = ($state);

    if (preg_match('/^M.*s$/', ($state)))
        $statesList[2] = ($state);

    if (preg_match('/a$/', ($state)))
        $statesList[3] = ($state);
}

echo "<br><br>StatesList Array :<br>";
for ($i = 0; $i < 4; $i++)
    print("StatesList[$i]=$statesList[$i]<br>");
?>
</body>
</html>
