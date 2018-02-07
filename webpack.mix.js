let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/jquery-ui.min.css',
    'resources/assets/css/jquery-ui.structure.min.css',
    'resources/assets/css/jquery-ui.theme.min.css',
    'resources/assets/css/style.css'
],'public/css/theme.css');

mix.scripts([
    'resources/assets/js/jquery-ui.min.js',
    'resources/assets/js/theme-configurations.js',
    'resources/assets/js/script.js'
],'public/js/theme.js');
