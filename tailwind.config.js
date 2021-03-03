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
                'main_brand':'#2b2e4a',
                'dark_shades':'#53354A',
                'dark_accent':'#903749',
                'light_accent':'#E84545',
                'light_shades':'#E4DDDE',
                'primary':'#554f6a',
                'info':'#523446',
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
