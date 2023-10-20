#!/bin/bash

./vendor/bin/sail up -d

docker exec -it kinopoiskich-laravel.test-1 php artisan migrate:fresh

docker exec -it kinopoiskich-laravel.test-1 php artisan storage:link

# Create admin user
docker exec -it kinopoiskich-laravel.test-1 php artisan moonshine:user

