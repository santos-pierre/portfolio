const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw()
    .js('source/_assets/js/main.js', 'js')
    .postCss('source/_assets/css/main.css', './source/assets/build/css/main.css', [
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,
    })
    .version();
