<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <h1>Good to see you</h1>
    <?php 
        $t = $_GET["type"];
        $s = $_GET["size"];
        $c = $_GET["color"];
    
    if($t == "mini" && $s == "L" && $c =="black")
        echo "<h2> out of stock <br> $t  $s  $c :( </h2>";
    else
        echo "<h2> great choose ! enjoy :) <br>" . $t ." "  . $s ." " . $c . "</h2>";
        
    ?>

</body>
</html>