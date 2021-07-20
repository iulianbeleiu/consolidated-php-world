# Consolidated PHP World

#### Built-in web server

````
> php -S localhost:8000 -t public/
````

#### Run php unit tests

````
> ./vendor/bin/phpunit tests
````

#### Docker commands

````
> docker-compose build
> docker-compose up
> docker-compose down
> docker exec -it php-fpm bash
> sudo docker-compose run --rm php-fpm sh -c "php bin/int-generator"
````