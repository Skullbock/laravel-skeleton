<?php

use Illuminate\Support\Collection;

if (!function_exists('locales')) {
    function locales(): Collection
    {
        return collect(config('locales.supportedLocales', []));
    }
}
