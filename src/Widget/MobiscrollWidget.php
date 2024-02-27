<?php

namespace Farm\FilamentMobiscroll\Widget;

use Filament\Widgets\Widget;

class MobiscrollWidget extends Widget
{
    protected static string $view = 'filament-mobiscroll::filament-mobiscroll';
    protected int|string|array $columnSpan = 'full';

    public function getResources(): array
    {
        return [];
    }

    public function getEvents(): array
    {
        return [];
    }
}