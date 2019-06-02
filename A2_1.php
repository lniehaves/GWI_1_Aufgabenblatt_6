<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Titel</title>
</head>
<body>
<table border="1">
    <tr>
        <th width="125">Vorname</th>
        <th width="125">Land</th>
        <th width="125">Alter</th>
    </tr>
    <?php
    $kunde = array(
        array("Thomas","Deutsch",21),
        array("Mesut","Türkisch",24),
        array("Felix","Deutsch",28),
        array("Chantal","Polnisch",23)
    );

    for($i=0;$i<sizeof($kunde);$i++) {
        echo "<tr>";
        echo "<td>" . $kunde[$i][0] . "</td>";
        echo "<td>" . $kunde[$i][1] . "</td>";
        echo "<td>" . $kunde[$i][2] . "</td>";
        echo "</tr>";
    }
    ?>
</body>
</html>