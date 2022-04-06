<?php


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