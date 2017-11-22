<?php
    exec('git --work-tree=/var/www/html/testebertholdogithub --git-dir=/var/www/html/testebertholdogithub/.git pull origin master 2>&1' , $output, $return_var);
?>