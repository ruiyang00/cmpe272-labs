<?php
require "header.php";
// create a new cURL resource
/**
 * Initialize the cURL session
 */
$ch = curl_init();

/**
 * Set the URL of the page or file to download.
 */
curl_setopt($ch, CURLOPT_URL, "http://www.weichao420.info/users.php");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

/**
 * Create a new file
 */
// $fp = fopen("data.txt", "w");

/**
 * Execute the cURL session
 */
$output = curl_exec($ch);

$data = strip_tags_content($output, "<header>", true);
$data = strip_tags_content($data, "<head>", true);



echo ($data);
// fwrite($fp, $data);

/**
 * Close cURL session and file
 */
curl_close($ch);
// fclose($fp);

function strip_tags_content($text, $tags = '', $invert = false)
{

    preg_match_all('/<(.+?)[\s]*\/?[\s]*>/si', trim($tags), $tags);
    $tags = array_unique($tags[1]);

    if (is_array($tags) and count($tags) > 0) {
        if ($invert == false) {
            return preg_replace('@<(?!(?:' . implode('|', $tags) . ')\b)(\w+)\b.*?>.*?</\1>@si', '', $text);
        } else {
            return preg_replace('@<(' . implode('|', $tags) . ')\b.*?>.*?</\1>@si', '', $text);
        }
    } elseif ($invert == false) {
        return preg_replace('@<(\w+)\b.*?>.*?</\1>@si', '', $text);
    }
    return $text;
}
?>

<body>

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
        
        while($user = $query_res -> fetch_assoc()){
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

