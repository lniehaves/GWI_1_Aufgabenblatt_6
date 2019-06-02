<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css"
</head>
<body>



<?php
ini_set('display_errors',0);
if(isset($_POST['submit'])) {

    $zahl1 = $_POST['zahl1'];
    $zahl2 = $_POST['zahl2'];


    if (isset($_POST['rz'])) {
        $operation = $_POST['rz'];

        switch ($operation) {
            case '+' :
                $result=$zahl1+$zahl2;
                break;
            case '-' :
                $result=$zahl1-$zahl2;
                break;

            case '*' :
                $result=$zahl1*$zahl2;
                break;


            case '/' :
                if ($zahl2 != 0 ){
                    $result=$zahl1/$zahl2;
                    break;
                }
                else{
                    $result="Division durch 0!";
                }

        }
    } else {
        echo "Operation auswählen.";
    }

}

?>
<form method="POST" action ="A6_1.php">
    Wert 1: <input name="zahl1" maxlength="5" /> </br> </br>
    Wert 2: <input name="zahl2" maxlength="5" /> </br> </br>

    <input type="radio" name="rz" value="+"> Plus </br>
    <input type="radio" name="rz" value="-"> Minus </br>
    <input type="radio" name="rz" value="*"> Mal </br>
    <input type="radio" name="rz" value="/"> Geteilt </br> </br>
    <input type="submit" name="submit" value="Berechnen"> </br> </br>

    <h2>Ergebnis: <?php echo $result; ?></h2>

</form>



</body>
</html>