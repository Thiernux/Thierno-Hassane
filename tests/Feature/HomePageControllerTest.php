<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Post;



class HomePageControllerTest extends TestCase
{
    
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_showing_single_home_page_class()
    {
         //here i isolate the HomeController class for testing 
        //if showing the single home page without the Modèle Post class

        $this->mock(HomeController::class, function ($mock) {
         $mock->shouldReceive('home')
              ->andReturn('pages/home');
        });  

        //$response = $this->call('GET', 'home');

        //$response->assertOk();

     }

}
