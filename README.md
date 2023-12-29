# Weble -  Laravel Skeleton

The skeleton application for any Weble Laravel project.

This skeleton comes with
- a few packages
- common setup and structure
- useful common tools

## Installation

`composer create-project weble/laravel-skeleton {project-name}`
`cd {project-name}`
`composer install`
`php artisan migrate`
`php artisan db:seed`

## Packages

- https://filamentphp.com/ with a default admin panel and its vite theme
- https://spatie.be/docs/laravel-translatable with its filament counterpart (https://filamentphp.com/plugins/filament-spatie-translatable)
- https://spatie.be/docs/laravel-medialibrary and its filament counterpart (https://filamentphp.com/plugins/filament-spatie-media-library)
- https://github.com/spatie/laravel-login-link with the easy admin login link in locale environments


## Setup

- User Seeder with `admin@example.com` as the admin user than can login into filament
- Model strict settings
- Model unguarded
- Model relation aliases
- Blade layouts using components
