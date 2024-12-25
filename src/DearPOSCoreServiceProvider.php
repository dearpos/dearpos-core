<?php

namespace DearPOS\DearPOSCore;

use DearPOS\DearPOSCore\Commands\DearPOSCoreCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class DearPOSCoreServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('dearpos-core')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_dearpos_core_table')
            ->hasCommand(DearPOSCoreCommand::class);
    }
}
