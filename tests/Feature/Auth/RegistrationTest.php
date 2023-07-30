<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public $seed = true;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $response = $this->post('/register', [
            'name' => 'Test User',
            'email' => 'sukel@codeshaper.tech',
            'password' => 'password',
            'password_confirmation' => 'password',
            'terms' => true,
        ]);

        $response->assertStatus(302);
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
