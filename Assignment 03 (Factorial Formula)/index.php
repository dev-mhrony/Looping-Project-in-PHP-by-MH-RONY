<?php



        // Question 03: 

        // Factorial - I think everyone knows the word. Factorial of 4 is given below:

        // 4! = 4*3*2*1 = 24

        // 6! = 6*5*4*3*2*1 = 720  

        // So let’s calculate the factorial of 7.




    // ========================================================= Case 01 ===============================================



    // $number = 8;                                        // Your Chose Factorial Number .
    
    // $factorial = 1;                                     //The n(n-1) formula is used to determine each factorial value. For which the value of factorial has been taken as "1".
   
    // for ($valu = $number; $valu>=1 ; $valu--){          // There are two reasons for giving $ a = input_number. (1. To shorten the name. //// 2. Here it has been done for the initialization )
    
    //     $factorial = $factorial * $valu;
   
    //     echo " This $number Factorial is $factorial <br>" ;
    // }



    // ========================================================= Case 02 ===============================================
    
    
    
    $number = 8;                                        // Your Chose Factorial Number .
    
    $factorial = 1;                                     //The n(n-1) formula is used to determine each factorial value. For which the value of factorial has been taken as "1".
    
    for ($valu = $number; $valu>=1 ; $valu--){          // There are two reasons for giving $ a = input_number. (1. To shorten the name. //// 2. Here it has been done for the initialization )
    
        $factorial = $factorial * $valu;
        
    }echo " This $number Factorial is $factorial" ;








    //==================================== Thank You =================================================

?>