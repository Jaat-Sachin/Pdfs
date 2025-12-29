#!/bin/bash

clear
echo "==============================="
echo "  INPUT FLOW LAB - PHP SERVER  "
echo "==============================="
echo

HOST="127.0.0.1"
PORT="8000"

echo "[+] Starting PHP server..."
echo "[+] URL: http://$HOST:$PORT"
echo "[+] Press CTRL + C to stop"
echo "--------------------------------"
echo

php -S $HOST:$PORT
