<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment 05 - Foreach </title>
</head>
<body>
   <?php



        // Question 05: 

        //         You have an array of your purchased product items. 

        // ['apple', 'orange', 'banana', 'mango']

        // Show all products as a table list.

        // Output should like that: “sl- 1 and product - apple”



    // Product Name 
    $product_list = ['apple', 'orange', 'banana', 'mango'] ;

    

    foreach ($product_list as $key => $name){
        echo ++$key . ' '. $name ;                  // Since the default value of the key starts from 0, its value is added to 1 and a specified in front of it.
        echo "<br>" ;
    }
 
        // ============================================ Thank You ==================================================


    ?>
</body>
</html>