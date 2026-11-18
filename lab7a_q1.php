 
<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <title>Lab 7a Q1</title> 
</head> 
<body> 
    <?php  
     $name = "NUR SUHAILAH BINTI ZAILANI"; 
        $matric = "AI250104";
        $course = "BIP";
        $year_of_study = 2;
        $address = "BATU PAHAT";
            ?> 
 
    <table border="1"> 
        <tr> 
            <td>Name :</td> 
            <td><?php echo "$name"; ?></td>  
        </tr> 
          <tr> 
            <td>matric number:</td> 
            <td><?php echo "$matric"; ?></td>  
        </tr> 
          <tr> 
            <td>course:</td> 
            <td><?php echo "$course"; ?></td>  
        </tr> 
          <tr> 
            <td>year of study:</td> 
            <td><?php echo "$year_of_study"; ?></td>  
        </tr> 
          <tr> 
            <td>Address:</td> 
            <td><?php echo "$address"; ?></td>  
        </tr> 
    </table> 
     
</body> 
</html> 
