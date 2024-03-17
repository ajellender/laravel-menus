<?php

namespace Ajellender\Menus;

use Ajellender\Menus\Commands\MenusCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MenusServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-menus')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-menus_table')
            ->hasCommand(MenusCommand::class);
    }
}
