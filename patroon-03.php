<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Patroon 3</title>
</head>
<body>
    <?php
     for ($i=0; $i<9; $i++){
        for ($j=0; $j<$i; $j++){
            ?> <div class="circle-red"></div> <?php
        }
        echo "<br>";
    }
    ?>
</body>
</html>