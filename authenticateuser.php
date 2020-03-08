<?php
require "header.php"
?>

<main>

    <?php
if (isset($_POST['submit_form'])) {
    $file = "users.txt";
    $content = file_get_contents($file);
    $arr = explode(" ", $content);

    $uname = $_POST['uname'];
    $psw = $_POST['psw'];

    if ($arr[0] == $uname && $arr[1] == $psw) {

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION[user_ID] = $arr[0];
        $_SESSION[user_Name] = $arr[1];

        echo '<p class = "login-status"> You are logging, below is our company secret clients</p>';

        $contacts = file('secret.txt');

        echo '<table>';
        foreach ($contacts as $info) {
            echo '<tr>';
            echo "<td>{$info}</td>";
            echo '</tr>';
        }
        echo '</table>';

    } else {

        echo '<p class = "login-status"> Welcome to my cmpe272 Athena project, a distributed key-value software, main page</p>';
    }

}

?>


</main>

