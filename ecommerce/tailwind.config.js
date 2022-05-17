const defaultTheme = require('tailwindcss/defaultTheme');
const colors = require('tailwindcss/colors');

module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },

            colors: {
                'principal': '#585859',
                'titulo': '#3f3f40',
                'titulo2': '#130f1a',
                'separador': '#d9d9d9',
                'footerprincipal': '#a1a4a5',
                'background': 'rgb(242,242,242,0)',
                'fondo': '#f2f2f2',
                'backgroundfooter': '#3F3F40',
            },

            screens: {
                's': '370px',
                ...defaultTheme.screens,
              },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};