<?php

declare(strict_types=1);

namespace KC\EloquentViewable\Contracts;

use KC\EloquentViewable\Support\Period;
use Jenssegers\Mongodb\Schema\Builder;
use Jenssegers\Mongodb\Relations\MorphMany;

interface Viewable
{
    /**
     * Get the value of the model's primary key.
     *
     * @return mixed
     */
    public function getKey();

    /**
     * Get the class name for polymorphic relations.
     *
     * @return string
     */
    public function getMorphClass();

    /**
     * Get the views the model has.
     *
     * @return Jenssegers\Mongodb\Relations\MorphMany
     */
    public function views(): MorphMany;

    /**
     * Scope a query to order records by views count.
     */
    public function scopeOrderByViews(Builder $query, string $direction = 'desc', ?Period $period = null, ?string $collection = null, bool $unique = false, string $as = 'views_count'): Builder;

    /**
     * Scope a query to order records by unique views count.
     */
    public function scopeOrderByUniqueViews(Builder $query, string $direction = 'desc', ?Period $period = null, ?string $collection = null, string $as = 'unique_views_count'): Builder;
}
