<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Titel</title>
</head>
<body>

    <?php
    $kunde = array(
        "Thomas" => array("Thomas","Deutsch",21),
        "Mesut" => array("Mesut","Türkisch",24),
        "Felix" =>array("Felix","Deutsch",28),
        "Chantal" => array("Chantal","Polnisch",23),
        "Ismene" => array("Ismene","Griechisch",31),
        "Samuel" => array("Samuel","Spanisch",25),
        "Vega" => array("Vega","Spanisch",17)
    );



            echo $kunde["Felix"][0] . " spricht ". $kunde["Felix"][1] . " und ist ". $kunde["Felix"][2] . " Jahre alt.";
            echo"<br>";
            echo $kunde["Mesut"][0] . " spricht ". $kunde["Mesut"][1] . " und ist ". $kunde["Mesut"][2] . " Jahre alt.";
            echo"<br>";


    ?>
</body>
</html>