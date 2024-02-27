<?php

namespace Farm\FilamentMobiscroll;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentMobiscrollServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-mobiscroll';

    public static string $viewNamespace = 'filament-mobiscroll';

    public function configurePackage(Package $package): void
    {
        $package
            ->name(static::$name)
            ->hasViews();
    }

    public function packageBooted()
    {
        FilamentAsset::register(
            $this->getAssets(),
            $this->getAssetPackageName()
        );
    }

    protected function getAssetPackageName()
    {
        return 'farmitaroma/filament-mobiscroll';
    }

    protected function getAssets()
    {
        return [
            AlpineComponent::make('filament-mobiscroll-alpine', __DIR__ . '/../dist/filament-mobiscroll.js'),
            Css::make('filament-mobiscroll-alpine', __DIR__ . '/../resources/css/mobiscroll.javascript.min.css')
        ];
    }
}