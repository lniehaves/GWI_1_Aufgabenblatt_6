<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Titel</title>
</head>
<body>
<table border="1">
    <tr>
        <th width="125">Schlüssel</th>
        <th width="125">Vorname</th>
        <th width="125">Land</th>
        <th width="125">Alter</th>
    </tr>
    <?php
    $kunde = array(
        "Person 1" => array("Thomas","Deutsch",21),
        "Person 2" => array("Mesut","Türkisch",24),
        "Person 3" =>array("Felix","Deutsch",28),
        "Person 4" => array("Chantal","Polnisch",23),
        "Person 5" => array("Ismene","Griechisch",31),
        "Person 6" => array("Samuel","Spanisch",25),
        "Person 7" => array("Vega","Spanisch",17)
    );

    foreach ($kunde as $key => $ausgabe) {
        list($vorname, $land, $alter) = $ausgabe;
        echo "<tr>";
        echo "<td>" . $key . "</td>";
        echo "<td>" . $vorname . "</td>";
        echo "<td>" . $land . "</td>";
        echo "<td>" . $alter . "</td>";
        echo "</tr>";
    }
    ?>
</body>
</html>
</html>