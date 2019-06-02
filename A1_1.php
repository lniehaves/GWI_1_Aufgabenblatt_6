<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Titel</title>
</head>
<body>

<?php
$data = array (
    "Cola" => "1,50" , "Fanta" => "1,50" , "Sprite" => "1,50" , "Wasser" => "1,20" , "Pils" => "2,00", "Radler" =>"2,00" , "Pils Cola" => "2,00");
?>

<?php
echo "<table border='1'><br />";
echo "<tr>";
echo " <th>Getränke</th> <th>Preise</th>";
echo "   </tr>";

foreach($data as $drink => $preis)
{
echo   "<tr>";
echo   "<td>$drink</td> ";
echo   "<td>$preis</td>";
echo   "</tr>";
}

echo "</table>";

?>


</body>
</html>