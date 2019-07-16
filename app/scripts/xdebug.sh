#!/bin/bash

if [ $1 == "enable" ] ;
then
    echo "Load xdebug.ini"
    cp ./scripts/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
    exit
fi

if [ $1 == "disable" ];
then
    echo "Remove xdebug.ini"
    rm /usr/local/etc/php/conf.d/xdebug.ini
    exit
fi