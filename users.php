<?php
require "header.php";

$hn = "localhost";
$un = "cmpe272user";
$pw = "cmpe272af!";
$db = "cmpe272";
$conn = new mysqli($hn, $un, $pw, $db);
// $query = "SELECT * FROM users";
$query = "SELECT * FROM users WHERE $searchbytype ='$input' ";
$db_query = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($db_query);
$conn->close();
?>

<body>

    <p>
    <?php
        echo '<table>';
        foreach ($result as $user) {
            echo '<tr>';
            echo "<td>{$user}</td>";
            // echo "<td>{$var['category'][$i]}</td>";
            echo '</tr>';
        }
        echo '</table>';
    ?>
    </p>
<body>


