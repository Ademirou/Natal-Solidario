#!/bin/bash

while true; do
  cd /var/www/html && php artisan schedule:run --verbose
  sleep 60
done