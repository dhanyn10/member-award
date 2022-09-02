<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Session;
use Tests\TestCase;

use UserSeeder;

class UserTest extends TestCase
{
    use RefreshDatabase;

    public function test_LoginUser()
    {
        Session::start();
        $this->seed(UserSeeder::class);
        $response = $this->call('POST', '/', [
            'email' => 'users@award.com',
            '_token' => csrf_token()
        ]);

        $response->assertRedirect(route('award'));
        $response = $this->get('/award');
        $response->assertStatus(200);
        $response->assertSeeText('award');
    }
}
