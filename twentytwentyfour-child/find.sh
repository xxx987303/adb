#! /bin/bash

set -e

#./clean.sh > /dev/null
pp=$(echo $1|sed 's/\^/:/')
find . -type f -exec grep -i -E -H --color "$1" {} \; | grep -vE "~:|js/amcharts_|mycop/" |  grep -i -E --color "$pp"
#find . -type f -exec grep -i -E -H --color "$1" {} \; | grep -vE "~:|mycop/" |  grep -i -E --color "$pp"
