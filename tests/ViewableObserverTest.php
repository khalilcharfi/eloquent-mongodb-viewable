<?php

declare(strict_types=1);

namespace KC\EloquentViewable\Tests;

use KC\EloquentViewable\Tests\TestClasses\Models\Post;
use KC\EloquentViewable\View;

class ViewableObserverTest extends TestCase
{
    /** @var \KC\EloquentViewable\Tests\TestClasses\Models\Post */
    protected $post;

    public function setUp(): void
    {
        parent::setUp();

        $this->post = factory(Post::class)->create();
    }

    /** @test */
    public function it_can_destroy_all_views_when_viewable_gets_deleted()
    {
        TestHelper::createView($this->post);
        TestHelper::createView($this->post);
        TestHelper::createView($this->post);

        $this->assertEquals(3, View::count());

        $this->post->delete();

        $this->assertEquals(0, View::count());
    }

    /** @test */
    public function it_does_not_destroy_all_views_when_viewable_gets_deleted_and_removeViewsOnDelete_is_set_to_false()
    {
        $this->post->removeViewsOnDelete = false;

        TestHelper::createView($this->post);
        TestHelper::createView($this->post);
        TestHelper::createView($this->post);

        $this->assertEquals(3, View::count());

        $this->post->delete();

        $this->assertEquals(3, View::count());
    }
}
