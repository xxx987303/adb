#! /bin/bash

set -e

#./clean.sh > /dev/null
pp=$(echo $1|sed 's/\^/:/')
find . -type f -exec grep -i -E -H --color "$1" {} \; | grep -vE "~:|js/amcharts_libX|mycop/" |  sort | grep -i -E --color "$pp"
