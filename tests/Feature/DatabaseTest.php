<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Post;
use Illuminate\Database\Migrations\Migration;
use Faker\Generator as Faker;

class DatabaseTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testDatabase()
    {
        // test if the database has in users table email

        $this->assertDatabaseHas('users', [
            'email' => 'lenore.rodriguez@example.org'
        ]);
    } 
 
}
