# Laravel Bootstrap Dashboard

Start your development with a Bootstrap 4 Dashboard built for Laravel 5.7 and up. This is fully coded "front end + back end" solution to kick start your next Laravel project. It features many components that can help you create amazing dashboard applications.

## Features

-   Laravel default authentication enabled
-   User email verification enabled
-   User roles and permissions implemented using [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
-   Job queue implementation for emails
-   Zero downtime deployer

## Installation

1. Clone this project or download ZIP file and extract it
2. Make sure you have Node.js and NPM installed globally
3. Goto Project Directory
4. Copy .env.example to .env
5. Update .env with your database details
6. Set write permission to storage folder
7. On the command prompt run the following commands

```bash
    composer install
    npm install
    php artisan key:generate
    php artisan migrate
    php artisan db:seed
    npm run dev
    php artisan serve
```

## Deployment

## Credits

-   [Htmlstream](https://htmlstream.com/templates/stream-dashboard-ui-kit) for the free Bootstrap theme

## License

The is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
