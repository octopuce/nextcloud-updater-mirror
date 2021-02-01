Nextcloud Server Download Mirror
================================

These are scripts and hacks to host your own nextcloud UPDATER and DOWNLOAD mirror

* clone this repository,
* launch bootstrap.sh (on a debian, will use sudo)
* use apache or nginx to host those files (see apache2/ directory for configurations example.)
* add a crontab to launch update.sh every hour or so..
* EDIT UPDATE.SH to use your mail (not mine) and your domain (not octopuce) for hosting.

You will need a TLS Certificate for your HTTPS hosting of course ;) 

CC0 license.


