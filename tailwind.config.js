const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            colors: {
                'main_brand':'#522D5B',
                'dark_shades':'#FB7B6B',
                'dark_accent':'#D7385E',
                'light_accent':'#EA78A4',
                'light_shades':'#E7D39F',
                'primary':'#554f6a',
                'info':'#f47a6f',
                'success':'#4f9258',
                'warning':'#cc8220',
                'danger':'#f44336',
              },

            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                poppins:['Poppins', 'sans-serif']
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
