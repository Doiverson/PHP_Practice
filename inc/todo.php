<?php
include 'list.php';

foreach ($list as $key => $item) {
    echo $key . ' = ' . $item['title'] . "\n";
}

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