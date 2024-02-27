<?php

namespace Farm\FilamentMobiscroll;

use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentMobiscrollPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-mobiscroll';
    }

    public function register(Panel $panel): void
    {
        //
    }

    public function boot(Panel $panel): void
    {
        //
    }
}