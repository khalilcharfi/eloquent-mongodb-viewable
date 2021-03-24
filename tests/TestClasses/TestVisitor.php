<?php

declare(strict_types=1);

namespace KC\EloquentViewable\Tests\TestClasses;

use KC\EloquentViewable\Visitor;

class TestVisitor extends Visitor
{
    public function isCrawler(): bool
    {
        return true;
    }
}
