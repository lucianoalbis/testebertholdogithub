<?php
    $output = shell_exec('cd /var/www/html/testebertholdogithub');
    $output .= shell_exec('git pull');
    
    echo "<pre>$output</pre>";
?>