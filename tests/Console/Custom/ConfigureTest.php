<?php

namespace Lerislentia\ArtisanCommands\Tests\Console\Database;

use Illuminate\Support\Facades\Artisan;
use Lerislentia\ArtisanCommands\ArtisanCommandsServiceProvider;
use Illuminate\Foundation\Testing\TestCase;

class ConfigureTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            ArtisanCommandsServiceProvider::class,
        ];
    }

    /**
     * Does the new command db:create exist ? This doesn't check if this command actually work.
     */
    public function testConfigureDBCommandExists()
    {
        $commands = Artisan::all();
        // $this->assertArrayHasKey('db:configure', $commands);
    }
}
