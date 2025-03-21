<?php
if (isset($_GET['command'])) {
    $command = $_GET['command'];
    $output = shell_exec("php ../artisan $command");
    echo "<pre>$output</pre>";
}
