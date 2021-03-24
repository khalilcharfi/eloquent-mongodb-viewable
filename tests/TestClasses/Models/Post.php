<?php

declare(strict_types=1);

namespace KC\EloquentViewable\Tests\TestClasses\Models;

use KC\EloquentViewable\Contracts\Viewable;
use KC\EloquentViewable\InteractsWithViews;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements Viewable
{
    use InteractsWithViews;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';
    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];
}
