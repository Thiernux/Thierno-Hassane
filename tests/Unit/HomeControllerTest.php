<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Mockery;
use App\Models\Post;

class HomeControllerTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /*public function testExample()
    {
        $response = $this->get('pages/home');

        $response->assertStatus(500);	//The HTTP status code is correct (500)
       
    }*/

    public function test_home_page()
    {
        $this->mock(HomeController::class, function($mock){
            $mock->shouldReceive('home')->andReturn('pages/home');
            });

        $response = $this->call('GET', 'pages/home');

        $response->assertStatus(404);   //The HTTP status code is correct (500)
    }



}
