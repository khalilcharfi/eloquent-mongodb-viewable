<?php

declare(strict_types=1);

namespace KC\EloquentViewable\Contracts;

interface CrawlerDetector
{
    /**
     * Determine if the current visitor is a crawler.
     */
    public function isCrawler(): bool;
}
