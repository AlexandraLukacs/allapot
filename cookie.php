<?php
    setcookie("felhasznalo", "Szandi", time()+5);
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_COOKIE["felhasznalo"])){
            echo "Üdvözlünk ".$_COOKIE["felhasznalo"]."!";
        }else{
            echo "Üdvözlünk vendég!";
        }
    ?>
</body>
</html>