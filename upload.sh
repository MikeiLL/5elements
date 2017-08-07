#!/usr/bin/env bash

rsync -avP languages js css *.php *.css sheridan:public_html/wp/wp-content/themes/5elements
