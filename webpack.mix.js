const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(
    [
        'resources/js/app.js',
        'resources/vendor/jquery-migrate/jquery-migrate.min.js',
        'resources/vendor/bootstrap/bootstrap.min.js',
        'resources/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js',
        'resources/vendor/chart.js/Chart.min.js',
        'resources/vendor/validator.js'
    ],
    'public/js/app.js'
);

mix.sass('resources/sass/app.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}
