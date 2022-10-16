# Laravel in WP plugin prototype

## Changes in Laravel code

- Rename `.env` to `.env.php` for security
  - add lines on first and last part of the file
  - add `$app->loadEnvironmentFrom('.env.php');` on artisan file
- Update `config/database.php` file to use settings from `wp-config.php`
- Remove all default migrations files
  - remove files from migrations folder
  - remove Sanctum package
    - `composer remove laravel/sanctum`
    - remove `config/sanctum.php` file
- Install Corcel package
  - `composer require jgrossi/corcel`
- Update `routes/web.php` file to use prefix
