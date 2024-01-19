# Weble -  Laravel Skeleton

The skeleton application for any Weble Laravel project.

This skeleton comes with
- a few packages
- common setup and structure
- useful common tools

## Installation

- `composer create-project weble/laravel-skeleton:dev-main {project-name}`
- `cd {project-name}`
- `composer install`
- `php artisan migrate`
- `php artisan db:seed`

## Deployment

The skeleton comes with preconfigured code styling and testing for Github Actions.

When in production, remember to add the scheduler settings to the server.

```* * * * * cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1```

## Packages

- https://filamentphp.com/ with a default admin panel and its custom vite theme
- https://github.com/bezhanSalleh/filament-exceptions?tab=readme-ov-file for viewing exceptions in filament.
- https://spatie.be/docs/laravel-translatable with its filament counterpart (https://filamentphp.com/plugins/filament-spatie-translatable)
- https://spatie.be/docs/laravel-medialibrary and its filament counterpart (https://filamentphp.com/plugins/filament-spatie-media-library)
- https://github.com/spatie/laravel-settings and its filament counterpart (https://github.com/filamentphp/spatie-laravel-settings-plugin?tab=readme-ov-file)
- https://github.com/ralphjsmit/laravel-seo and its filament counterpart(https://github.com/ralphjsmit/laravel-filament-seo)
- https://github.com/spatie/laravel-login-link with the easy admin login link in locale environments
- https://github.com/spatie/laravel-googletagmanager to have automatic GTM integration
- https://github.com/weble/laravel-cookiebar for a valid cookiebar integration with GTM consent mode
- https://spatie.be/docs/laravel-data/v3/introduction for DTOs
- https://github.com/pboivin/filament-peek/tree/2.x to have a ready to use preview action
- https://underground.works/clockwork/ for debugging


## Default Settings

- User Seeder with `admin@example.com` as the admin user than can login into filament
- Model strict settings
- Model unguarded
- Model relation aliases
- Blade layouts using components
- Preconfigured Tailwind CSS in the frontend
- Italian and English language installed via https://laravel-lang.com/
