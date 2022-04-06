<?php



        // Question 01:

        // Your client said that he needs a dropdown, which contains all days of the running month. Sometimes we fill up a registration form that, which date of birth. So find out in google (get number of days in specific month php) and do this assignment using a for loop.

        // Day quantity is not equal for every month. Like as - february - 28, March - 31, april - 30

        // So days of running month should dynamic (by php build in function)


    //Your Corrent Month Hear 
    $place_your_month = 2;

     //Your Corrent Year Hear 
    $place_your_Year = 2020 ;
   
    
        //
        $corrent_month = cal_days_in_month(CAL_GREGORIAN, $place_your_month, $place_your_Year) ;

    //================================================================================================

    //    I have used the if formula here for how many days to print for a month. It is shown below.
    
    //================================================================================================

     if($corrent_month <= 28){                      // It will be used to print 28 days a month.
        for ($corrent_month =1 ; $corrent_month <= 28; $corrent_month++){
            echo $corrent_month . "<br>" ;
        };
     }elseif ($corrent_month <= 29){                // It will be used to print 29 days a month.
        for ($corrent_month =1 ; $corrent_month <= 29; $corrent_month++){
            echo $corrent_month . "<br>" ;
        };
    }elseif($corrent_month <= 30){                  //It will be used to print 30 days a month.
        for ($corrent_month =1 ; $corrent_month <= 30; $corrent_month++){
            echo $corrent_month . "<br>" ;
        };
    }elseif($corrent_month <= 31){                  //It will be used to print 31 days a month.
        for ($corrent_month =1 ; $corrent_month <= 31; $corrent_month++){
            echo $corrent_month . "<br>" ;
        };
    };



    //==================================== Thank You =================================================

?>