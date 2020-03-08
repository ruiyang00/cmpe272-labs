<?php
require "header.php"
?>

<main>
    <body>

<form action="authenticateuser.php" method="post">
  <div class="container">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit" value="signup_submit" name="submit_form">Login</button>
  </div>
</form>
</body>
</main>
