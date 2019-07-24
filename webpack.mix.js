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

mix.react('resources/js/portofolio.js', 'public/js').sass('resources/sass/portofolio.scss', 'public/css');
mix.react('resources/js/contact.js', 'public/js').sass('resources/sass/contact.scss', 'public/css');
