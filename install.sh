#!/bin/sh
#
# Copyright (C) 2016 Rizki Mufrizal <mufrizalrizki@gmail.com>
#
# Distributed under terms of the MIT license.
#

echo "update aplikasi"
pkg update

echo "upgrade aplikasi"
pkg upgrade -y

echo "Installing git"
pkg install git -y

echo "Installing php"
pkg install php -y

echo "Installing php-curl"
pkg install php-curl -y

echo "Cloning git"
git clone https://github.com/km37id/43ml