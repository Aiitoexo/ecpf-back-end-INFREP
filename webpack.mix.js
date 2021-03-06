const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require("tailwindcss"),
    ])
    .js('resources/js/navbar_desktop.js', 'public/js')
    .js('resources/js/section_menu.js', 'public/js')
    .js('resources/js/bg-header.js', 'public/js')
    .copyDirectory('resources/img', 'public/img')
    .version();

