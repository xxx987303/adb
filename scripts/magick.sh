#! /bin/bash

set -e
set -x
cd ~/Downloads/АДБ/

mkdir -p processed

# Trim files
for f in source/*.jpeg; do
    base=$(basename "$f")
    
    magick "$f" \
        -colorspace Gray \
        -auto-level \
        -deskew 40% \
        -sharpen 0x1 \
	-normalize \
        -resize 2000x2000\> \
        "processed/$base"
done
