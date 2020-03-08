<?php


if(isset($_POST['submit_form'])) {
    echo <<<_END
    <h1>work </h1>
_END;
    $file = "users.txt";
    $content = file_get_contents($file);
    $arr = explode(" ", $content);  
    
    $uname = $_POST['uname'];
    $psw = $_POST['psw'];

    if ($arr[0] == $uname && $arr[1] == $psw) {

        session_start();
        $_SESSION[user_ID] = $arr[0];
        $_SESSION[user_Name] = $arr[1];

        header("Location: index.php");
        exit();
    }

} else {


     echo <<<_END
        <h1>Not set </h1>
    _END;
    

}

