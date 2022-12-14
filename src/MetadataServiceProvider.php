<?php

namespace Finller\Metadata;

use Finller\Metadata\Commands\MetadataCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class MetadataServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-model-metadata');
        // ->hasConfigFile()
        // ->hasViews()
        // ->hasMigration('create_laravel-model-metadata_table')
        // ->hasCommand(MetadataCommand::class);
    }
}
