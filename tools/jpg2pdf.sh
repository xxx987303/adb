#!/bin/bash

set -e
set -x

INPUT_DIR="processed"
OUTPUT_DIR="batches"
BATCH_SIZE=26

mkdir -p "$OUTPUT_DIR"

files=("$INPUT_DIR"/*.jpeg)

count=0
batch=2

while [ $count -lt ${#files[@]} ]; do

    subset=("${files[@]:$count:$BATCH_SIZE}")

    outfile=$(printf "%s/batch_%03d.pdf" "$OUTPUT_DIR" "$batch")

    echo "Creating $outfile"

    magick "${subset[@]}" \
        -compress jpeg \
        -quality 85 \
        "$outfile"

    count=$((count + BATCH_SIZE))
    batch=$((batch + 1))

done
