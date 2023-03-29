<?php

namespace Weward\Summoner;

use Spatie\LaravelPackageTools\Commands\InstallCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Weward\Summoner\Commands\SummonerCommand;

class SummonerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('summoner')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_summoner_table')
            ->hasCommands([SummonerCommand::class]);
        // ->hasInstallCommand(function(InstallCommand $command) {
        // $command
        // ->publishCommands()
        // ->publishMigrations()
        // ->askToRunMigrations()
        // ->publishConfigFile();
        // });
    }
}
