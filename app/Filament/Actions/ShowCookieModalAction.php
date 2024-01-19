<?php

namespace App\Filament\Actions;

use Filament\Actions\Action;
use Filament\Forms\Components\CheckboxList;

class ShowCookieModalAction extends Action
{
    protected function setUp(): void
    {
        parent::setUp();

        $this->label('Test');
        $this->name('showCookieModal');

        $this->form([
            CheckboxList::make('test')
                ->options([
                    '1' => 1,
                ]),
        ]);

        $this->action(fn (array $data) => dump('123'));
    }
}
