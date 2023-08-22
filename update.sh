#!/bin/sh

# update the official updater :
cd /var/www/nextcloud/updater_server.orig
NEW=$(LC_ALL=C git pull | wc -l)
if [ $NEW -gt 1 -o "$1" = "force" ]
then
    # something was updated on the original source, let's patch ! 
    rsync -a /var/www/nextcloud/updater_server.orig/ /var/www/nextcloud/updater_server/ --delete --exclude "vendor/" 
    cd /var/www/nextcloud/updater_server/
    patch <../index.diff
    cat config/config.php |sed -e 's#download.nextcloud.com#ncdownload.octopuce.fr#g' >../octopuce-config.php
    cd ..
    php download-missing.php
    echo "The update of nextcloud mirror just happened" | mail -s "Update Nextcloud Mirror done" benjamin@octopuce.fr 
fi
