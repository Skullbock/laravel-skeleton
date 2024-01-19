<?php

namespace App\Livewire;

use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Weble\LaravelFilamentCookieBar\Livewire\HasCookieBar;

class Footer extends Component implements HasActions, HasForms
{
    use HasCookieBar;
    use InteractsWithActions;
    use InteractsWithForms;

    public function render(): View
    {
        return view('layouts.sections.footer');
    }
}
