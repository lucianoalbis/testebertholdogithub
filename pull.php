<?php
    exec('cd /var/www/html/testebertholdogithub 2>&1' , $output, $return_var);
    echo "<pre>$output</pre>";
    exec('git pull 2>&1', $output, $return_var);
    echo "<pre>$output</pre>";
?>