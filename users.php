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
        $result = mysqli_query($conn, $query);

        
        while($user = $result -> fetch_assoc()){
            echo "<tr>";
                echo "<td>";
                    echo $row["fn"];
                echo "</td>";
                echo "<td>";
                    echo $row["ln"];
                echo "</td>";
                echo "<td>";
                    echo $row["email"];
                echo "</td>";
                echo "<td>";
                    echo $row["haddress"];
                echo "</td>";
                echo "<td>";
                    echo $row["hphone"];
                echo "</td>";
                echo "<td>";
                    echo $row["cphone"];
                echo "</td>";
            echo "</tr>";
    
        }
    ?>
    </p>
<body>


