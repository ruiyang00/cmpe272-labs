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
        $query_res = mysqli_query($conn, $query);
        

        // print_r($query_res);
        
        while($user = $$query_res -> fetch_assoc()){
            echo "<tr>";
                echo "<td>";
                    echo $user["fn"];
                echo "</td>";
                echo "<td>";
                    echo $user["ln"];
                echo "</td>";
                echo "<td>";
                    echo $user["email"];
                echo "</td>";
                echo "<td>";
                    echo $user["haddress"];
                echo "</td>";
                echo "<td>";
                    echo $user["hphone"];
                echo "</td>";
                echo "<td>";
                    echo $user["cphone"];
                echo "</td>";
            echo "</tr>";
    
        }
    ?>
    </p>
<body>


