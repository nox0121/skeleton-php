<?php

namespace Nox0121\Skeleton;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nox0121\Skeleton\SkeletonClass
 */
class SkeletonFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'skeleton';
    }
}
