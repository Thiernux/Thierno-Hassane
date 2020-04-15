<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Post;
use Mockery;

class ShowPostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_it_show_author_name_post()
    {
         $this->mock(Post::class, function ($mock) {
            $mock->shouldReceive('author')->andReturn('name');
        	});

            $response = $this->call('GET', '/posts');

            $response->assertStatus(404);
        	//$response->assertViewHas('App\User','user_id', 'id');
    }

    public function test_it_show_post()
    {
        

        $response = $this->get('/listPosts');

        $response->assertStatus((500));	//The HTTP status code is correct is
        //$response->assertViewHas('pages/posts', 'posts');
       
    }
}
