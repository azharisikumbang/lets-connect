<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterAnCommunityTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    
    public function test_user_can_register_an_community(): void
    {
        $this->withoutExceptionHandling();

        $fakeCommunity = [
            'name' => 'Komunitas Kafekoding'
        ];

        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('/mendaftar', [
            'community_name' => $fakeCommunity['name']
        ]);

        $response->assertRedirect('/profil');
        $response->assertSessionDoesntHaveErrors();

        $this->assertDatabaseCount('communities', 1);
        $this->assertDatabaseHas('communities', [
            'managed_by' => $user->id
        ]);
    }

    public function test_registration_should_has_error_when_invalid(): void
    {
        $fakeCommunity = [
            'name' => '' // cannot be empty
        ];

        $user = User::factory()->create();

        $response = $this
            ->actingAs($user)
            ->post('/mendaftar', [
                'community_name' => $fakeCommunity['name']
            ], ['HTTP_REFERER' => '/mendaftar']);

        $response->assertRedirect('/mendaftar');
        $response->assertSessionHasErrors([
            'community_name'
        ]);
    }
}
