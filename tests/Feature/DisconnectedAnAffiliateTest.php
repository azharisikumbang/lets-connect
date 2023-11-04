<?php

namespace Tests\Feature;

use App\Models\Community;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisconnectedAnAffiliateTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_disconnected_between_communities(): void
    {
        // prepare data: connect one
        $this->withoutExceptionHandling();

        $actor = User::factory()->create();
        $this->actingAs($actor);

        $communityRequestor = Community::factory()->make();
        $actor->community()->save($communityRequestor);
        
        $communityTarget = Community::factory()->make();
        $otherActor = User::factory()->create();
        $otherActor->community()->save($communityTarget);

        $request = [
            'community_target' => 2
        ];

        $this->post('/connect', $request);

        // send request to disconnect
        $response = $this->post('/disconnect', $request);

        $response->assertRedirect();
        $response->assertSessionDoesntHaveErrors();
        
        $this->assertDatabaseCount('communities', 2);
        $this->assertDatabaseCount('affiliates', 0);
    }
}
