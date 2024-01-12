module.exports = {
    content: [
        './app/**/*.php',
        './config/**/*.php',
        './resources/**/*.{php,js, css}',
        './storage/framework/views/*.php',
        './vendor/filament/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
    ],
    theme: {
        extend: {
            colors: {
                primary: require('tailwindcss/colors').blue,
            },
        },
    },
    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
}
