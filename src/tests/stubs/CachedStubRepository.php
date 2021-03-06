<?php

namespace Trm42\CacheDecorator\Tests\Stubs;

use Trm42\CacheDecorator\CacheDecorator;

/**
 * Nothing fancy, just really simple array class to mock repository
 *
 *
 */
class CachedStubRepository extends CacheDecorator {

	protected $excludes = ['allWithoutCache', 'insert'];

    public function repository()
    {
        return StubRepository::class;
    }

}
