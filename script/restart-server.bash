#!/bin/sh
BASEDIR=$(dirname $0)
cd $BASEDIR
cd ..

php bin/console server:stop --env=dev
sleep 2
php bin/console server:start --env=dev
