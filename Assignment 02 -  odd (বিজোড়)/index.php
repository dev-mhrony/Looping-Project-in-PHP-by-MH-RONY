<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 02 - "For Loop" </title>
</head>
<body>
    <?php


 //==============================================Question=========================================

        // If we print 1-100, our output will be 100 times. But this time you have print out only the odd (বিজোড়) number within 1-100.

        // You have to rotate from 1 to 100.

        // Your output message should like that, “3 is a odd number”

        // Not need to print even number

    //==============================================XXXXXXXX=========================================

        // Here the value of a is taken as 1 which is because if 2 increments are made with its value then odd numbers are found.






    // ===================================================Case 01=========================================================




    /*
        
    for($a = 1 ;  $a <=100 ;  $a += 2) {        //2 is added to 1 to bring the odd number so that the odd number can be easily determined.
        echo "The odd number is as follows : $a";
        echo "<br>";                            // Note: <br> = It is used to apply brakes after a number.

    }

    */







// ===================================================Case 02=========================================================

    for($a = 2 ;  $a <=100 ;  $a++) {
        if ($a%2 != 0){                                     // If the quotient is 0, then it will be an even number. Not equal has been used for this.
            echo "The odd number is as follows : $a <br>";
        }
         
    }




    

    // ----------------------------- Thank You ----------------------------------

?>
</body>
</html>