<?php

namespace Pnkjwebspero\Changepage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;

class HomePageServiceProvider extends ServiceProvider
{
    public function boot()
    {
     // Add the npm dependency to package.json when the package is installed
     $this->addNpmDependency();
    }

    

    public function register(){

        if ($this->app->runningInConsole()) {
            $this->commands([
                ButtonCommand::class,
            ]);
        }
    }

    protected function addNpmDependency()
    {
        $packagePath = base_path('package.json');
        $packageContents = json_decode(file_get_contents($packagePath), true);

        // Check if dependencies key exists, otherwise create it
        if (!isset($packageContents['dependencies'])) {
            $packageContents['dependencies'] = [];
        }

        // Check if the dependency already exists, otherwise add it
        if (!isset($packageContents['dependencies']['@vitejs/plugin-react'])) {
            $packageContents['dependencies']['@vitejs/plugin-react'] = '^4.0.0';

            // Save the modified package.json
            file_put_contents($packagePath, json_encode($packageContents, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }

        // Check if the dependency already exists, otherwise add it
        if (!isset($packageContents['dependencies']['react-dom'])) {
            $packageContents['dependencies']['react-dom'] = '^18.2.0';

            // Save the modified package.json
            file_put_contents($packagePath, json_encode($packageContents, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }

        if (!isset($packageContents['dependencies']['@proton/web-sdk'])) {
            $packageContents['dependencies']['@proton/web-sdk'] = '^4.2.15';

            // Save the modified package.json
            file_put_contents($packagePath, json_encode($packageContents, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        }
    }
}
