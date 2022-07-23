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

mix.styles([
    'resources/css/bootstrap.min.css',
    'resources/css/style.css',
    'resources/css/components.css',
], 'public/css/all.css');


mix.scripts([
    'resources/js/jquery.min.js',
    'resources/js/popper.js',
    'resources/js/tooltip.js',
    'resources/js/bootstrap.min.js',
    'resources/js/jquery.nicescroll.min.js',
    'resources/js/moment.min.js',
    'resources/js/stisla.js',
    'resources/js/jquery-ui.min.js',
    'resources/js/components-table.js',
    'resources/js/scripts.js',
    'resources/js/custom.js',
], 'public/js/all.js');


mix.styles([
    'resources/css/home-css/aos.css',
    'resources/css/home-css/bootstrap.min.css',
    'resources/css/home-css/style.css',
], 'public/css/home.css');


mix.scripts([
    'resources/js/home-js/aos.js',
    'resources/js/home-js/glightbox.min.js',
    'resources/js/home-js/swiper-bundle.min.js',
    'resources/js/home-js/main.js',
], 'public/js/home.js');


