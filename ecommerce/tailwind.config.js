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
                'primary-header': '#585859',
                'primary-h1': '#3f3f40',
                'primary-h2': '#130f1a',
                'primary-separator': '#d9d9d9',
                'primary-description': '#585859',
               ' primary-price': '#3f3f40',
                'primary-footer': '#f2f2f2',
                'primary-footer-section': '#a1a4a5',
                'background': '#f2f2f2',
                'background-footer': '#3F3F40',
              },
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};