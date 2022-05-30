<?php
$no1 = $_POST["no1"];
$no1 = (float)$no1;
echo "1st number : ".$no1;

echo "<br>";

$no2 = $_POST["no2"];
$no2 = (float)$no2;
echo "2nd number : ".$no2;

echo "<br>";

$button = $_POST["button"];

if($button == "+")
{
    echo"Result: [Addition] : " . $no1 + $no2;
}
if($button == "-")
{
    echo "Result: [Subtraction] : " . $no1 - $no2;
}
if($button == "*")
{
    echo "Result: [Multiplication] : " . $no1 * $no2;
}
if($button == "/")
{
    echo "Result: [Division] : " . $no1 / $no2;
}
?>
