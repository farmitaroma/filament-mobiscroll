<x-filament-widgets::widget>
    <x-filament::section>
        <div id="event-calendar" wire:ignore ax-load
             ax-load-src="{{ \Filament\Support\Facades\FilamentAsset::getAlpineComponentSrc('filament-mobiscroll-alpine', 'farm/filament-mobiscroll') }}"
             ax-load-css="{{ \Filament\Support\Facades\FilamentAsset::getStyleHref('filament-mobiscroll-alpine', 'farm/filament-mobiscroll') }}"
             x-ignore
             x-data="filamentMobiscroll()"
        >

        </div>
    </x-filament::section>
</x-filament-widgets::widget>