<?php
require "header.php"
?>


<!DOCTYPE html>
<html lang="en">
<body>
    <h1>
        Click on the our query/create buttons to search the user or create a new user into our database
    </h1>
    <form method="post">
        <label for="query"><b>search by</b></label>
        <select name="select">
            <option value="fn">First Name</option>
            <option value="ln">Last Name</option>
            <option value="email">Email</option>
            <option value="cphone">Cellphone</option>
            <option value="hphone">Homephone</option>
        </select>
        <input name="search_input" required>
        <button type="submit" value="query_submit" name="query">query</button>
    </form>

    <form method="post">
        <h2> Create a new User</h2>
        <label for="firstname"><b>firstname</b></label>
        <input name="firstname_input" required><br><br>

        <label for="lastname"><b>lastname</b></label>
        <input name="lastname_input" required><br><br>

        <label for="email"><b>email</b></label>
        <input name="email_input" required><br><br>

        <label for="homeaddress"><b>home address</b></label>
        <input name="homeaddress_input" required><br><br>

        <label for="homephone"><b>home phone</b></label>
        <input name="homephone_input" required><br><br>

        <label for="cellphone"><b>cell phone</b></label>
        <input name="cellphone_input" required><br><br>

        <button type= "submit" value= "create_submit" name="create">create</button>
    </form>

    <h2>
            <?php
if (isset($_POST['query'])) {
    $searchbytype = $_POST['select'];

    $input = $_POST['search_input'];
    $result = queryDB($input, $searchbytype);
    echo "Below are your query result:\n";
    if (empty($result)) {
        echo "no such user sorry! please make another query";
    } else {
        echo '<table>';
        foreach ($result as $user) {
            echo '<tr>';
            echo "<td>{$user}</td>";
            // echo "<td>{$var['category'][$i]}</td>";
            echo '</tr>';
        }
        echo '</table>';
    }
}

if (isset($_POST['create'])) {
    $fn = $_POST['firstname_input'];
    $ln = $_POST['lastname_input'];
    $em = $_POST['email_input'];
    $hadd = $_POST['homeaddress_input'];
    $hp = $_POST['homephone_input'];
    $cp = $_POST['cellphone_input'];
    createUser($fn, $ln, $em, $hadd, $hp, $cp);
}

?>
     </h2>

</body>

<?php

function queryDB($input, $searchbytype)
{

    $hn = "localhost";
    $un = "root";
    $pw = "";
    $db = "cmpe272";
    $conn = new mysqli($hn, $un, $pw, $db);
    // $query = "SELECT * FROM users";
    $query = "SELECT * FROM users WHERE $searchbytype ='$input' ";
    $db_query = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($db_query);
    $conn->close();
    return $result;

}

function createUser($fn, $ln, $em, $hadd, $hp, $cp)
{
    //cmpe272-pswd10
    $hn = "localhost";
    $un = "cmpe272user";
    $pw = "cmpe272af!";
    $db = "cmpe272";
    $conn = new mysqli($hn, $un, $pw, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $query = "INSERT INTO users (fn, ln, email, haddress, hphone, cphone) VALUES ('$fn', '$ln', '$em', '$hadd', '$hp', '$cp')";
    $result = $conn->query($query);

    if (!$result) {
        echo "INSERT failed: $query<br>" . $conn->error . "<br><br>";
    } else {
        echo "new user creation successed, please use query button to query for specific user info";
    }

    $conn->close();
}
?>
</html>
