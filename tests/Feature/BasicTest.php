<?php

namespace Tests\Feature;

use Tests\TestCase;

class BasicTest extends TestCase
{
	public function test_a_welcome_view_can_be_rendered()
    {
        $view = $this->view('components.landing.hero');

        $view->assertSee('The best place to learn something new');
    }

    public function test_home_page()
    {
        $response = $this->get('/');

        $response->assertSee('The best place to learn something new');
    }
}
