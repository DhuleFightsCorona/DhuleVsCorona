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

 mix.scripts(
     [
         "public/assets/js/jquery.min.js",
         "public/assets/js/popper.min.js",
         "public/assets/js/bootstrap.js",
         "public/template/assets/js/theme.js"
     ],
     "public/js/all.js"
 );