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



