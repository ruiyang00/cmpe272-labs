<?php
require "header.php"
?>


<main>

    <?php
    if (isset($_SESSION['user_Name'])) {
        echo '<h1"> You have logged in, here is our company secret section</h1">';
        echo '<p class = "login-status"> let me show you some our secretive clients info below, if you want to know more click the User button to query our database yourself!!!!</p>';
        
        $contacts = file('secret.txt');

        echo '<table>';
        foreach ($contacts as $info) {
            echo '<tr>';
            echo "<td>{$info}</td>";
            // echo "<td>{$var['category'][$i]}</td>";
            echo '</tr>';
        }
        echo '</table>';
        
    } else {

        echo '<p class = "login-status"> Welcome to my cmpe272 Athena project, a distributed key-value software, main page</p>';
    }
?>
</main>

<?php
// require "footer.php"
?>