<?php

declare(strict_types=1);

namespace KC\EloquentViewable\Tests;

use Carbon\Carbon;
use KC\EloquentViewable\Contracts\Viewable;
use KC\EloquentViewable\View;

class TestHelper
{
    /**
     * Helper function to create a view.
     *
     * @param  \KC\EloquentViewable\Contracts\Viewable  $viewable
     * @param  array  $data
     * @return \KC\EloquentViewable\View
     */
    public static function createView(Viewable $viewable, $data = [])
    {
        return View::create([
            'viewable_id' => $viewable->getKey(),
            'viewable_type' => $viewable->getMorphClass(),
            'visitor' => $data['visitor'] ?? 'unique_hash',
            'collection' => $data['collection'] ?? null,
            'viewed_at' => $data['viewed_at'] ?? Carbon::now(),
        ]);
    }
}
