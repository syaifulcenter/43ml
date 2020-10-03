#!/bin/sh
#
# Copyright (C) 2016 Rizki Mufrizal <mufrizalrizki@gmail.com>
#
# Distributed under terms of the MIT license.
#

echo "update aplikasi"
pkg update -y

echo "upgrade aplikasi"
pkg upgrade -y

echo "Installing php"
pkg install php -y

echo "Installing php-curl"
pkg install php-curl -y
