#!/bin/bash
clear

if ! which python3 >/dev/null; then
  echo - e "Command not found! Install? (y/n) \c"
  read
  if "$REPLY" = "y"; then
    sudo apt-get install python3
  fi
fi

if ! which php >/dev/null; then
  echo - e "Command not found! Install? (y/n) \c"
  read
  if "$REPLY" = "y"; then
    sudo apt-get install php
  fi
fi

cd src/

python3 main.py
