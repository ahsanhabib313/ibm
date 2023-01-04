const mix = require("laravel-mix");

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

mix.js("resources/js/src/backend/apps/backend-app.js", "public/js")
    .js("resources/js/src/backend/apps/app-auth.js", "public/js")
    .js("resources/js/src/frontend/apps/frontend-app.js", "public/js")
    .vue()
    .sass("resources/sass/app.scss", "public/css")
    .version();

mix.browserSync('http://127.0.0.1:8000');
