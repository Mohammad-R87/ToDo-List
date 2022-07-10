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

// mix.js('resources/js/app.js', 'public/js')
//     .vue()
//     .sass('resources/sass/app.scss', 'public/css');

mix.styles([
    'resources/css/bootstrap.css',
    'resources/css/owl.carousel.css',
    'resources/css/owl.theme.default.css',
    'resources/css/style.css',
], 'public/css/all.css');


mix.scripts([
    'resources/js/jquery.js',
    'resources/js/bootstrap.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/index.js'
], 'public/js/all.js');