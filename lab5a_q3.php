<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lab 5a Q3</title>
    </head>
    <body>
        <?php
        function calculateArea($length,$width)
        {
            return $length * $width;
        }
        
        $length = 10;
        $width = 6;
        
        $area = calculateArea($length, $width);
        
        echo "The area of a rectangle with a width of $width and $length is $area";
        ?>
    </body>
</html>