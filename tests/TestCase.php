<?php

namespace Creekmore108\LLike\Tests;

use Creekmore108\LLike\LLikeServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            LLikeServiceProvider::class,
        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        include_once __DIR__ . '/migrations/create_users_table.php';

        (new \CreateUsersTable)->up();
    }
}
