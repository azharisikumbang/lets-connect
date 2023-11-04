<?php

namespace Tests\Feature;

use App\Models\Community;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommunityCanConnectEachOtherTest extends TestCase
{
    use RefreshDatabase;

    public function test_community_can_send_connect_request_to_other_community(): void
    {
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

        $response = $this->post('/connect', $request);

        $response->assertRedirect();
        $response->assertSessionDoesntHaveErrors();
        
        $this->assertDatabaseCount('communities', 2);
        $this->assertDatabaseCount('affiliates', 1);

        $this->assertDatabaseHas('affiliates', [
            'requestor' => $communityRequestor->id,
            'target' => $communityTarget->id
        ]);
    }

    public function test_a_community_cannot_associate_to_himself(): void
    {
        $this->withoutExceptionHandling();

        $actor = User::factory()->create();
        $this->actingAs($actor);

        $communityRequestor = Community::factory()->make();
        $actor->community()->save($communityRequestor);

        $request = [
            'community_target' => 1
        ];

        $response = $this->post('/connect', $request);

        $response->assertSessionHasErrors();
        
        $this->assertDatabaseCount('communities', 1);
        $this->assertDatabaseCount('affiliates', 0);
    }

    public function test_it_cannot_send_request_when_its_already_connected(): void
    {
        // create connected one
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


        // send others
        $response = $this->post('/connect', $request);

        $response->assertSessionHasErrors();
        $response->assertRedirect();

        $this->assertDatabaseCount('communities', 2);
        $this->assertDatabaseCount('affiliates', 1);

        $this->assertDatabaseHas('affiliates', [
            'requestor' => $communityRequestor->id,
            'target' => $communityTarget->id
        ]);

    }
}
