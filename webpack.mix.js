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
mix.js('resources/js/public/app.js', 'public/js/public')
    .vue()
    .sass('resources/sass/public/app.sass', 'public/css/public').version();

mix.js('resources/js/person/app.js', 'public/js/person')
    .vue()
    .sass('resources/sass/person/app.sass', 'public/css/person').version();
