<?php
require "header.php"
?>



<main>
    <?php
$contacts = file('contacts.txt');

echo '<table>';
foreach ($contacts as $info) {
    echo '<tr>';
    echo "<td>{$info}</td>";
    // echo "<td>{$var['category'][$i]}</td>";
    echo '</tr>';
}
echo '</table>'
?>
</main>