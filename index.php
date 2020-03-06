<?php
require "header.php"
?>


<main>

    <?php
if (isset($_SESSION['user_Name'])) {
    echo '<p class = "login-status"> You are logging!</p>';
} else {

    echo '<p class = "login-status"> Welcome to my cmpe272 Athena project, a distributed key-value software, main page</p>';
}
?>
</main>

<?php
// require "footer.php"
?>