<?php
include 'list.php';

$status = 'false';
$filter = array();
foreach ($list as $key => $item) {
    if ($status === 'all' || !$item['complete'] == $status) {
        $filter[] = $key;
    }
}

echo '<pre>';
var_dump($filter, boolval('all'), $status == 'all');

echo '<table>';
echo '<tr>';
echo '<th>Title</th>';
echo '<th>Priority</th>';
echo '<th>Due Date</th>';
echo '<th>Complete</th>';
echo '</tr>';

foreach ($list as $item) {
        echo '<tr>';
        echo '<td>' . $item['title'] . "</td>\n";
        echo '<td>' . $item['priority'] . "</td>\n";
        echo '<td>' . $item['due'] . "</td>\n";
        echo '<td>';
        if ($item['complete']) {
            echo 'Yes';
        } else {
            echo 'No';
        }
        echo "</td>\n";
        echo '</tr>';
}
echo '</table>';