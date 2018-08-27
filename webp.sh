#!/bin/bash


# FILES=./source/uploads/*
# for f in $FILES
# do
#   echo "Processing $f file..."
#   # take action on each file. $f store current file name
# done


# find ./source/uploads -type f -exec file --mime-type {}  \; | awk '{if ($NF == "image/jpeg") print $0 }'


# find ./source/uploads -name "*.jpg" -print0 | xargs -0 g++

for f in `find ./source/uploads -name *.jpg` ; do

    filename=$(basename -- "$f")
    dir=$(dirname "$f")
    echo $dir
    extension="${filename##*.}"

    filename="${filename%.*}"
    # echo $filename
    cwebp -q 90 $f -o $dir/$filename.webp;
done
