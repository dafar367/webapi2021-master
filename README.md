## License

This project based from Laravel framework which is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## How to Use This Project
* Make sure your xampp or wampp already on latest version because this project use Laravel ^8.0 and require PHP ^7.3.0 | PHP ^8.0
* Open project folder and run git bash terminal
* Run this following command in bash terminal
    ```javascript
    $ composer install
    $ cp .env.example .env
    $ php artisan key:generate
    ```
* setup .env file then run migrate command
    ```
    $ php artisan migrate --seed
    ```
* Open in browser
