# Zenpit Backend Challenge

this challenge is developed using laravel 5.6 framework .

## Requirments

- [laravel & php requirments](https://laravel.com/docs/5.6#server-requirements)

- pdo sqlite extension must be enabled , you can try something like this to install sqlite extension (sudo apt-get install php7.2-sqlite)

## Installation

clone the project & run the following commands :-

- composer install

- cp .env.example .env

- open .env file and modify DB_CONNECTION and other database environment variables

- create a database with the same name as DB_DATABASE environemtn variable

- run php artisan migrate --seed

- run php artisan serve (to open up a local dev server)

- open your rest client and try to hit (localhost:8000/api/devices)

note that (localhost:8000) can be changeable based on the output of php artisan serve command


## Testing

run the following command

- composer test