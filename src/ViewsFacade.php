<?php

declare(strict_types=1);

namespace KC\EloquentViewable;

use KC\EloquentViewable\Contracts\Views as ViewsContract;
use Illuminate\Support\Facades\Facade;

/**
 * @see \KC\EloquentViewable\Views
 * @codeCoverageIgnore
 */
class ViewsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return ViewsContract::class;
    }
}
