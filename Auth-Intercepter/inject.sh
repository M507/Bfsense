#!/usr/bin/env bash


# Static values

## Python proxy
## https://github.com/M507/ELk-Tower/tree/master/python
## Docker public IP
set FLASK_IP="10.10.1.140"
set FLASK_HTTPS_PORT="5151"
set FLASK_HTTP_PORT="5150"
set filename="/etc/inc/authgui.inc"


# Replace
cp $filename $filename.bk
sed 's|var url = "https:\/\/FLASK_IP:FLASK_HTTPS_PORT\/logs\/pfsense\/"+path;|var url = "https:\/\/'$FLASK_IP':'$FLASK_HTTPS_PORT'\/logs\/pfsense\/"+path;|g' $filename.bk > $filename
cp $filename $filename.bk
sed 's|var url = "http:\/\/FLASK_IP:FLASK_HTTP_PORT\/logs\/pfsense\/"+path;|var url = "http:\/\/'$FLASK_IP':'$FLASK_HTTP_PORT'\/logs\/pfsense\/"+path;|g' $filename.bk > $filename

