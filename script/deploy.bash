#!/bin/bash
BASEDIR=$(dirname $0)
cd $BASEDIR
cd ..

echo "Checking for Composer"
COMPOSER_CMD=$(which composer)
if [[ "" == "$COMPOSER_CMD" ]]
then
    echo "Installing Composer"
    curl -sS https://getcomposer.org/installer | php -- --install-dir=bin
    COMPOSER_CMD=$(which composer)
else
    echo "Updating Composer"
    $COMPOSER_CMD update
fi
echo "Running Composer"
$COMPOSER_CMD install
echo "Done..."

echo "Cleaning app/cache"
php bin/console cache:clear --no-warmup
echo "Running doctrine:schema:update"
bin/console doctrine:schema:update --force
echo "Running doctrine:migrations:migrate"
bin/console doctrine:migrations:migrate -n
#assets
bin/console assets:install --symlink
bin/console assetic:dump
