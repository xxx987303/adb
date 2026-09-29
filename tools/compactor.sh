#! /bin/bash
# YB 2025-11-04
#
# Replace by symbolic liks the image files.
# Would be nice to replace JPEG fils by WEBP, but native ProcessWire rejects those
#

set -e
dryRun=

# WordPress images location
# R=$(cd $(dirname $0); pwd -P | sed s,/tools.*$,,)/site/assets/files
# R=/Users/yb/Sites/sh/site/assets/files
# R=/Users/yb/Sites/dad/wp-content/uploads/2026/*/*
R=/Users/yb/Sites/adb/wp-content/uploads/

# Returns number of dots in the input string
function countDots() {
    n=$(echo $1 | while read -r line; do
	    dots=${line//[^.]}
	    printf '%d\n' ${#dots}
	done)
    [ -z "$n" ] && {
	echo "??? countDots gives no answer for \"$1\""
	exit 1
    }
    echo $n
}

for item in $(find $R -type f|sort); do
    [ -z "$(file $item | grep image)" ] && continue 
    [ -z "$(echo $item | grep [0-9]*x[0-9]*)" ] && continue 
    base=$(echo $item|sed s/\-[0-9]*x[0-9]*//)
    [ $item = $base ] && continue
    [ -f $base ] || { echo shit; exit; }
    [ -L $base ] && { echo shit; exit; }
    ln -svf $(basename $base) $item
#    ls -l $item
done
