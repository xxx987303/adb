#! /bin/bash

set -e
cd ~/Downloads/Dad/t/

ext="HEIC"
ext="jpeg"

n=27
n=36
n=99
n=126

for f in *.$ext; do
    ((++n))
    mv -v $f $n.jpeg
#    [ $n = 99 ] && exit
done
