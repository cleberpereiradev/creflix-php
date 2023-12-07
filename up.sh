docker stop $(docker ps -a -q) && docker-compose down && docker-compose up -d && docker ps && php artisan serve
