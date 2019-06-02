<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
if ($_GET["anzeigen"]=="ja"){
    echo"<div class=container>
        <p>Hier bin ich</p>
        </div>";
}
else{
    echo"<div class=container2>
        <p>Nichts</p>
        </div>";
}
?>

</body>
</html>