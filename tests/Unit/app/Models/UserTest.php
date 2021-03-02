<?php

namespace Tests\Unit\app\Models;

use App\Models\Category;
use App\Models\Image;
use App\Models\Profile;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_has_many_projects()
    {
        $user = User::factory()->create();
        $this->assertInstanceOf(Collection::class, $user->projects);
    }
    public function test_has_one_profile()
    {
        $user = User::factory()->create();
        $profile = Profile::factory()->create(['user_id' => $user->id]);
        $this->assertInstanceOf(Profile::class, $user->profile);
        $this->assertEquals(1, $user->profile->count());
    }
    public function test_morph_one_image()
    {
        $user = User::factory()->create();
        $profile = Profile::factory()->create(['user_id' => $user->id]);
        $image = Image::factory()->create([
            "imageable_id" => $user->id,
            "imageable_type" => "App\Models\User",
          ]);
        $this->assertInstanceOf(Image::class, $user->image);
    }

}
