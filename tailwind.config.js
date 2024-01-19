import preset from './vendor/filament/support/tailwind.config.preset'
export default {
    presets: [preset],
    content: [
        './app/**/*.php',
        './config/**/*.php',
        './resources/**/*.{php,js, css}',
        './storage/framework/views/*.php',
        './vendor/filament/**/*.blade.php',
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/weble/laravel-filament-cookiebar/resource/**/*.blade.php',
    ],
}
