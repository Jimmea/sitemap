<?php
/**
 * Created by PhpStorm.
 * User: Hungokata
 * Date: 3/29/18
 * Time: 9:28 PM
 */

namespace Coding\Sitemap\Commands;

use Illuminate\Console\Command;

class SiteMap extends Command
{
    protected $signature   = 'sitemap:test';
    protected $description = 'SiteMap Test';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        dump('123');
    }
}