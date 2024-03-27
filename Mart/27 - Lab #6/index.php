<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 

    echo ("<table>");

    for ($i = 1; $i < 10; $i++) {
    
        echo ("<tr>");

        for ($j = 1; $j < 10; $j++) {
            
            
        
            echo ( "<td> " . $i . " * " . $j . " = " . ($i * $j) . "&emsp;" . "</td>");
            
            
            
        }
        echo("</tr>");
    }
    echo("<table");
    
    ?>

</body>
</html>
