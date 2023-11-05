<?php

namespace Tests\Feature;

use App\Models\Activity;
use App\Models\Community;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommunityCommentToActivityTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_it_can_create_a_comment_to_activity(): void
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create();
        $community = Community::factory()->make();
        $user->community()->save($community);

        $activity = Activity::factory()->create([
            'owner' => 1
        ]);

        $commentBody = $this->faker->paragraph; 
        $request = [
            'comment' => $commentBody
        ];

        $response = $this
            ->actingAs($user)
            ->post('/activity/1/comments', $request);

        $this->assertDatabaseCount('comments', 1);
        $this->assertDatabaseHas('comments', [
            'body' => $commentBody,
            'commented_on' => $activity->id,
            'commented_by' => $community->id
        ]);

        $response->assertSessionDoesntHaveErrors();
        $response->assertSessionHas('message');
        $response->assertRedirect();
        
    }
}
