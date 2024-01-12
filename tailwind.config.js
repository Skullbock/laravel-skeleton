module.exports = {
    content: [
        './app/**/*.php',
        './config/**/*.php',
        './resources/**/*.{php,js}',
        './storage/framework/views/*.php',
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
