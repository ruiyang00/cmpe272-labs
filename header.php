<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <header>
        <nav>
            <ul class="topnav">
            <li><a href="index.php">Athena</a></li>
            <?php
                if (isset($_SESSION['user_Name'])) {

                    echo '
                    <li><a href="useraction.php">User</a></li>
                        <li class="topnav-right"><a href="logout.php"> Log Out</a></li>
                    ';
                } else {

                    echo '
                                    <li class="topnav-left"><a href="index.php"> Home</a></li>
                                    <li class="topnav-left"><a href="about.php"> About</a></li>
                                    <li class="topnav-left"><a href="service.php"> Services</a></li>
                                    <li class="topnav-left"><a href="news.php"> News</a></li>
                                    <li class="topnav-left"><a href="contacts.php"> Contacts</a></li>
                                    <li class="topnav-left"><a href="users.php"> Users</a></li>
                                    <li class="topnav-left"><a href="allusers.php"> All Users</a></li>

                                    <li class="topnav-right"><a href="login.php"> Login</a></li>'
                    ;
                }
?>


            </ul>
        </nav>
    </header>
    <text>
    </text>



</body>

</html>
