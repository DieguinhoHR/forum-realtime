<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use DatabaseMigrations;

    public function testReplies()
    {
        $this->seed('RepliesTableSeeder');

        $response = $this->get('/threads/1');
        $response->assertStatus(200);

        $response = $this->get('/threads/2');
        $response->assertStatus(200);

        $response = $this->get('/threads/a');
        $response->assertStatus(404);
    }

    public function testThreadVisualization()
    {
        $this->seed('ThreadsTableSeeder');

        $thread = \App\Thread::find(1);

        $response = $this->get('/threads/' . $thread->id);

        $response->assertSee($thread->title);
        $response->assertSee($thread->body);
    }
}
