<?php
require "header.php"
?>

<?php
    $histroy = "lastFiveVisitedItem";
    if (!isset($_COOKIE[$histroy])) {
        $items = array("SQLite");
        $json = json_encode($items);

        setcookie($histroy, $json);
    } else {
        $cookie = $_COOKIE['lastFiveVisitedItem'];
        $cookie = stripslashes($cookie);
        $savedItemArray = json_decode($cookie, true);    
        if (count($savedItemArray) <= 4) {
            array_push($savedItemArray, 'SQLite');
            $json = json_encode($savedItemArray);
        } else {
            array_shift($savedItemArray);
            array_push($savedItemArray, 'SQLite');
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
                <h1>SQLite Cluster</h1>
                <div class="cassandraImage">
                    <img src = "./images/SQLite.jpg">
                </div>
                <discription>This is the discription for SQLite product:This is SQLite cluster with 10 nodes service</discription>
            </div>
        </div>
</body>
