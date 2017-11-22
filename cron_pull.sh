#!/bin/bash
dir /var/www/html/testebertholdogithub
env -i git reset —hard
env -i git pull origin master
exit