# Movie Catalog

Movie catalog single page web application, made with Laravel and React


## Dependencies

* PHP >= 7.2
* Web server capable of serving PHP (e.g. Apache, nginx with php-fpm)
* node.js >= 8
* MySQL >= 8.0
* composer >= 1.8.0

## Getting Started

* Clone or download this repository
* Open a terminal and `cd` into the project directory
* Open mysql and create a new database for this project and make sure there is a user that has been granted all privileges on it
* Create a `.env` file by running `cp .env.example .env` and then filling in the appropriate value for your database connection
* Run `php artisan migrate` to setup your database
* You can run `php artisan db:seed --class=GenresTableSeeder` to seed the genres table
* Run `php artisan serve` to start a local webserver

## License

Movie Catalog is released under the MIT License. See license.txt for more details.