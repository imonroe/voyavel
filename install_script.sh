#!/usr/bin/env bash

echo "running installer."

php artisan storage:link
composer require tcg/voyager

nano .env
# set up database connection

php artisan voyager:install --with-dummy
# that will run all the migrations

# it will also create you an admin account.
# email: admin@admin.com
# password: password
# if you don't want to do it that way, you can make the admin account with
# php artisan voyager:admin your@email.com

# you now have a website with an admin panel.
# if you're having problems with images showing up, check your APP_URL in .env
# let's move templates and routes around


