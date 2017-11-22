#!/bin/bash
DIR="/var/www/html/testebertholdogithub"
CD_CMD="$(which cd)"
GI_CMD="$(which git)"
$CD_CMD DIR
$GI_CMD pull