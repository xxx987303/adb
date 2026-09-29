!#/bin/bash
set -x

to_db="yb_restor"
to_DocRoot="yb_restor"
to_host="localhost"

from_db="yb_restor"
from_DocRoot="restor"
from_host="yb.onestudio.ch"
from_hostForwarded=$to_host

sed  -i~ \
     -e s,https://$from_host/,http://$to_host/,g \
     -e s,/$from_DocRoot/,/$to_DocRoot/,g \
     -e s,/$from_DocRoot/,/$to_DocRoot,g \
     -e s,/$from_host/,/$to_host/,g  \
     -e s,/$from_host$,/$to_host,g \
     t
diff -sbB t t~
