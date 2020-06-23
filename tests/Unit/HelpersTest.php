<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{
    /**
     * A basic unit test example.
     *  @test
     *
     */
    public function pageTitleShouldReturnTheCorrectTitle()
    {
        $this->assertEquals('Laracarte - List of artisans', page_title(''));
    }

    /** @test */
    public function activeIfRouteSelected()
    {
        $this->get(route("home_path"));
        $this->assertEquals('', set_active_route('home_path'));
    }
}
