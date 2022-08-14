<?php

namespace Finller\Metadata\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Finller\Metadata\Metadata
 */
class Metadata extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Finller\Metadata\Metadata::class;
    }
}
