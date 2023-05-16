<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_example(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

      public function testUserMelihatLogin(){
         $response =$this->get('/auth');
         $response->assertSuccessful();
         $response->assertViewIs('auth.login');
      }

        public function testLoginForm(){
        
        
        }
}
