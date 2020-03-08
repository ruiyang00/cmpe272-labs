<?php
require "header.php"
?>


<main>

    <?php
if (isset($_SESSION['user_Name'])) {
    echo '<p class = "login-status"> You are logging, below is our company secret clients</p>';
    
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