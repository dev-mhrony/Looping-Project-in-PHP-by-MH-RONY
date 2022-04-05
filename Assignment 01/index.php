<?php

   

    
        $corrent_month = cal_days_in_month(CAL_GREGORIAN, 4, 2022) ;

        

    
            for ($corrent_month = 1 ; $corrent_month <= 30 ; $corrent_month++){
           
                echo $corrent_month ;
                echo "<br>" ;
            }
            
?>