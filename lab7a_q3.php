<!DOCTYPE html>
<html lang ="en">
<head>
    <title></title>
</head>
<body>
    <?php 
       function calculateArea($width,$height){

       $area =$width*$height;
       return $area;
       }

       $width =4;
       $height =2;
       $area =calculateArea($width,$height);

       echo "<p>The area of a rectangle with a width of $width and $height is $area</p>";
       ?>
</body>
</html>

