#!\bin\bash

docker-compose up -d

php artisan migrate

php artisan serve


