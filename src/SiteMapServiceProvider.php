<?php
namespace Coding\Sitemap;
use Coding\Sitemap\Commands\SiteMap;
use Illuminate\Support\ServiceProvider;

/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 3/29/18
 * Time: 8:58 PM
 */
class SiteMapServiceProvider extends ServiceProvider
{
    protected $commands = [
        SiteMap::class
    ];

    public function register()
    {
        $this->commands($this->commands);
    }
}