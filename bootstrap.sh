#!/bin/sh

# after cloning this repository, launch this to bootstrap it :)

cd $(dirname $0)
sudo apt update
sudo apt install php-cli php-xml php-curl git 
mkdir -p downloads/server/releases/
git clone https://github.com/nextcloud/updater_server.git updater_server.orig
mkdir updater_server
cd updater_server.orig
composer update
echo "Now configure apache using apache2/ configurations"
echo "and add update.sh to your hourly crontab"

