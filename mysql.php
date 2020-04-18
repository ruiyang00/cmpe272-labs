<?php
require "header.php"
?>

<?php
    $histroy = "lastFiveVisitedItem";

    if (!isset($_COOKIE[$histroy])) {
        $items = array("MySQL");
        $json = json_encode($items);

        setcookie($histroy, $json);
    } else {
        $cookie = $_COOKIE['lastFiveVisitedItem'];
        $cookie = stripslashes($cookie);
        $savedItemArray = json_decode($cookie, true);
       
        if (count($savedItemArray) <= 4) {
            array_push($savedItemArray, 'MySQL');
            $json = json_encode($savedItemArray);
        } else {
            array_shift($savedItemArray);
            array_push($savedItemArray, 'MySQL');
            $json = json_encode($savedItemArray);
        }

        setcookie($histroy, $json);

    }
?>

<style>
body{text-align:center}
</style>
<body>
        <div class="row">
            <div class="cassandraPro">
                <h1>MySQL Cluster</h1>
                <div class="cassandraImage">
                    <img src = "./images/MySQL-Logo.png">
                </div>
                <discription>This is the discription for MySQL product:This is MySQL cluster with 10 nodes service</discription>
            </div>
        </div>
</body>
