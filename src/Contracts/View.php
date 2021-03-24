<?php

declare(strict_types=1);

namespace KC\EloquentViewable\Contracts;

use KC\EloquentViewable\Support\Period;
use Jenssegers\Mongodb\Schema\Builder;
use Jenssegers\Mongodb\Relations\MorphTo;

interface View
{

    /**
     * Get the viewable model to which this View belongs.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function viewable(): MorphTo;

    /**
     * Scope a query to only include views within the period.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  \KC\EloquentViewable\Support\Period  $period
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeWithinPeriod(Builder $query, Period $period);
}
