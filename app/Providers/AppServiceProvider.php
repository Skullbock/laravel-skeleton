<?php

namespace App\Providers;

use App\Enums\AccountType;
use App\Enums\QuoteRowItemType;
use App\Models\Account;
use App\Models\Article;
use App\Models\Client;
use App\Models\Contact;
use App\Models\FanData;
use App\Models\Parameter;
use App\Models\Permission;
use App\Models\Quote;
use App\Models\QuoteRow;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;
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
}
