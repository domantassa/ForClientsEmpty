const mix = require('laravel-mix');


mix
    /* CSS */
    .sass('resources/sass/main.scss', 'public/css/oneui.css')
    .sass('resources/sass/oneui/themes/amethyst.scss', 'public/css/themes/')
    .sass('resources/sass/oneui/themes/city.scss', 'public/css/themes/')
    .sass('resources/sass/oneui/themes/flat.scss', 'public/css/themes/')
    .sass('resources/sass/oneui/themes/modern.scss', 'public/css/themes/')
    .sass('resources/sass/oneui/themes/smooth.scss', 'public/css/themes/')

    /* JS */
    .js('resources/js/app.js', 'public/js/laravel.app.js')
    .js('resources/js/oneui/app.js', 'public/js/oneui.app.js')

    /* Page JS */
    .js('resources/js/pages/tables_datatables.js', 'public/js/pages/tables_datatables.js')

    /* Tools */
    .browserSync('localhost:8000')
    .disableNotifications()

    /* Options */
    .options({
        processCssUrls: false
    });
