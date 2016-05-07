#!/bin/bash

exec 2>&1

echo 'Content-Type: text/html'
echo ''
echo '<pre>'



# taper ci-dessous des commandes unix

sh make_mo_files.sh -po fr_FR


echo '</pre>'
echo ok
