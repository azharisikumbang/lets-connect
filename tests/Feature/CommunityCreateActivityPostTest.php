<?php

namespace Tests\Feature;

use App\Models\ActivityImages;
use App\Models\Community;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class CommunityCreateActivityPostTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    public function test_a_community_post_an_activity(): void
    {
        $this->withoutExceptionHandling();

        Storage::fake('images');

        $user = User::factory()->create();
        $community = Community::factory()->make();
        $user->communities()->save($community);

        $this->actingAs($user);

        $listImages = [
            UploadedFile::fake()->image("image1.jpg"),
            UploadedFile::fake()->image("image2.jpg")
        ];

        $request = [
            'title' => $title = $this->faker->title,
            'content' => $content = $this->faker->paragraph,
            'deadline' => '2023-01-01',
            'images' => $listImages 
        ];

        $response = $this->post('/activities', $request);
        
        // assert in database
        $this->assertDatabaseCount('activities', 1);
        $this->assertDatabaseHas('activities', [
            'title' => $title,
            'deadline' => '2023-01-01',
            'body' => $content,
            'owner' => $community->id
        ]);

        $this->assertDatabaseCount('activity_images', 2);
        $this->assertDatabaseHas('activity_images', [
            'activity_id' => 1
        ]);

        // check on disk
        // ActivityImages::all()->map(fn ($image) => Storage::disk('images')->files());

        $response->assertSessionDoesntHaveErrors();
        $response->assertSessionHas('message');
        $response->assertRedirect();
    }

    public function test_a_community_can_post_a_activity_without_image(): void
    {
        $this->withoutExceptionHandling();

        Storage::fake('images');

        $user = User::factory()->create();
        $community = Community::factory()->make();
        $user->communities()->save($community);

        $this->actingAs($user);

        $request = [
            'title' => $this->faker->title,
            'content' => $content = $this->faker->paragraph,
            'images' => []
        ];

        $response = $this->post('/activities', $request);
        
        // assert in database
        $this->assertDatabaseCount('activities', 1);
        $this->assertDatabaseHas('activities', [
            'body' => $content,
            'owner' => $community->id
        ]);

        $this->assertDatabaseCount('activity_images', 0);

        $response->assertSessionDoesntHaveErrors();
        $response->assertSessionHas('message');
        $response->assertRedirect();
    }
}
