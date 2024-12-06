const mix = require('laravel-mix');

// Compile the app.js file and output to public/js
mix.js('resources/js/app.js', 'public/js')

   // Compile the app.scss file and output to public/css
   .sass('resources/sass/app.scss', 'public/css');
