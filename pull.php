<?php
    exec('cd /var/www/html/testebertholdogithub 2>&1' , $output, $return_var);
    print_r($output);
    exec('git pull 2>&1', $output, $return_var);
    print_r($output);
?>