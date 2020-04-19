<?php
require "header.php";

?>

<body>

    <p>
    <?php
        $hn = "localhost";
        $un = "cmpe272user";
        $pw = "cmpe272af!";
        $db = "cmpe272";
        $conn = new mysqli($hn, $un, $pw, $db);
        // $query = "SELECT * FROM users";
        $query = "SELECT * FROM users";
        $db_query = mysqli_query($conn, $query);
        $result = fetch_assoc($db_query);
        $conn->close();
        if (empty($result)) {
            echo "no such user sorry! please make another query";
        } else {

            print_r($result[0]);
            
            
             
        }
    ?>
    </p>
<body>


