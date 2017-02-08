# Laravel app version

Display application version number.

## Installation

Require it in your Laravel project:

    composer require butochnikov/laravel-app-version

or update `composer.json` file:
   
   ```json
   {
       "require": {
           "laravel/framework": "5.4.*",
           "butochnikov/laravel-app-version": "dev-master"
       }
   }
   ```

and run `composer update` from terminal.

Update `app.php` file in `app/config` directory:

```php
'providers' => [
    ...
    Butochnikov\LaravelAppVersion\AppVersionServiceProvider::class
    ...
],
```

## How to use

Run console command:

    php artisan app:ver

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.