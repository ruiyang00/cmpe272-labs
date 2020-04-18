<?php
require "header.php"
?>

<body>
    <div class="fivevisited">
        <h1>
            Below are last visit five products
        </h1>
        
        
        <div class="items" align='center' >
            <?php
                if(!isset($_COOKIE['lastFiveVisitedItem'])){
                                      
                    echo 'no recent visited items';
                }else{

                    $cookie = $_COOKIE['lastFiveVisitedItem'];
                    $cookie = stripslashes($cookie);
                    $savedItemArray = json_decode($cookie, true);
                    foreach ($savedItemArray as $key => $value) {
                        echo "The {$key} item is: $value <br>";
                    }
                }
                // print_r($savedItemArray);
                // echo 'hello';
            ?>
        </div>
    
    
    
    </div>
</body>
