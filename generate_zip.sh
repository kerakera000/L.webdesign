#!/bin/bash

FILENAME=$1

cd src
zip -r src *
mv src.zip ../$FILENAME.zip

