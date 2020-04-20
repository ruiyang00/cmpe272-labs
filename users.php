<?php
require "header.php";

?>

<body>

<h1>
    Belos are the users from this own company's database ruiyang90.info
</h1>

    <table>
        <tr>
            <td class="tableheader"><strong>First Name</strong></td>
            <td class="tableheader"><strong>Last Name</strong></td>
            <td class="tableheader"><strong>Email</strong></td>
            <td class="tableheader"><strong>Home Address</strong></td>
            <td class="tableheader"><strong>Home Phone</strong></td>
            <td class="tableheader"><strong>Cell Phone</strong></td>
        </td>
    <?php
$hn = "localhost";
$un = "cmpe272user";
$pw = "cmpe272af!";
$db = "cmpe272";
$conn = new mysqli($hn, $un, $pw, $db);
// $query = "SELECT * FROM users";
$query = "SELECT * FROM users";
$query_res = mysqli_query($conn, $query);

// print_r($query_res);

while ($user = $query_res->fetch_assoc()) {
    echo "<tr>";
    echo "<td>";
    echo $user["fn"];
    echo "</td>";
    echo "<td>";
    echo $user["ln"];
    echo "</td>";
    echo "<td>";
    echo $user["email"];
    echo "</td>";
    echo "<td>";
    echo $user["haddress"];
    echo "</td>";
    echo "<td>";
    echo $user["hphone"];
    echo "</td>";
    echo "<td>";
    echo $user["cphone"];
    echo "</td>";
    echo "</tr>";

}
?>
    </table>
<body>


