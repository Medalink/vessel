<?php

namespace Vessel;

use Illuminate\Support\ServiceProvider;

class VesselServiceProvider extends ServiceProvider
{

    /**
     * Publish our files
     */
    public function boot()
    {
        $this->publishes([
            VESSEL_PATH . '/vessel' => base_path('vessel'),
        ]);
    }

    /**
     * Setup paths
     */
    public function register()
    {
        if (!defined('VESSEL_PATH')) {
            define('VESSEL_PATH', realpath(__DIR__ . '/../'));
        }
    }
}
