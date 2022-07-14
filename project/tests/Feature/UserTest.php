<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Foundation\Auth\User;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
   
    public function test_user()
    {
       $user = User::factory()->create();

       $response = $this->post('/login',[

         'email' => $this->user->email,
         'password' => '123456789',

       ]);

       $this->actingAs($user);

       $response = $this->get('/');

       $response->assertStatus(200);
    }

    public function test_Create_user()
    {
      $response = $this->post('/login/create', [
        'name' => 'lepao',
        'email' => 'rick@gmail.com',
        'is_admin' => 1,
        'password' => 123456789,

      ]);

      $response->assertStatus(200);
    }
}
