<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->configureModels();
        $this->configureRelations();
        $this->registerBladeComponents();
        $this->registerCollectionMacros();
    }

    private function configureModels(): void
    {
        Model::shouldBeStrict();
        Model::unguard();
    }

    private function configureRelations(): void
    {
        Relation::enforceMorphMap([
            'user' => User::class,
            // .....
        ]);
    }

    private function registerBladeComponents(): void
    {
        Blade::anonymousComponentPath(resource_path('views/layouts'), 'layouts');
    }

    private function registerCollectionMacros(): void
    {
        Collection::macro(
            'recursive',
            /** @phpstan-ignore-next-line */
            fn () => $this->map(
                fn ($value) => (is_array($value) || is_object($value)) ? Collection::make($value)->recursive() : $value
            )
        );
    }
}
