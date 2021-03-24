<?php

declare(strict_types=1);

namespace KC\EloquentViewable\Events;

use KC\EloquentViewable\Contracts\View;
use Illuminate\Queue\SerializesModels;

class ViewRecorded
{
    use SerializesModels;

    public View $view;

    public function __construct(View $view)
    {
        $this->view = $view;
    }
}
