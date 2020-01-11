<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectsTest extends TestCase
{
    use WithFaker; RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testAUserCanCreateAProject()
    {
        $attributes = [
            'title' => $this->faker->name,
            'description' => $this->faker->text,
        ];

        $this->post('/projects', $attributes);

        $this->assertDatabaseHas('projects', $attributes);
    }
}
