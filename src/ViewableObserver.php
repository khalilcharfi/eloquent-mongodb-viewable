<?php

declare(strict_types=1);

namespace KC\EloquentViewable;

use KC\EloquentViewable\Contracts\Viewable;
use Illuminate\Container\Container;

class ViewableObserver
{
    /**
     * Handle the deleted event for the viewable model.
     *
     * @param  \KC\EloquentViewable\Contracts\Viewable  $model
     * @return void
     */
    public function deleted(Viewable $viewable)
    {
        if ($this->removeViewsOnDelete($viewable)) {
            Container::getInstance()->make(Views::class)->forViewable($viewable)->destroy();
        }
    }

    /**
     * Determine if should remove views on model delete (defaults to true).
     *
     * @param  \KC\EloquentViewable\Contracts\Viewable  $viewable
     * @return bool
     */
    private function removeViewsOnDelete(Viewable $viewable): bool
    {
        return $viewable->removeViewsOnDelete ?? true;
    }
}
