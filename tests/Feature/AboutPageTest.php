<?php

namespace Tests\Feature;

use Tests\TestCase;

class AboutPageTest extends TestCase
{
    public function test_about_page_displays_correct_content(): void
    {
        $response = $this->get('/about');

        $response->assertOk()
            ->assertSee('Behind the brew')
            ->assertSee('Our Mission')
            ->assertSee('Our Vision')
            ->assertSee('READ MORE')
            ->assertSee('Umayam');
    }
}
