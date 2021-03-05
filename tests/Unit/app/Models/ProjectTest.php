<?php

namespace Tests\Unit\app\Models;

use App\Models\Category;
use App\Models\Image;
use App\Models\Member;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_belongs_to_a_category()
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();
        $project = Project::factory()->create(['user_id' => $user->id, 'category_id' => $category->id]);

        $this->assertEquals(1, $project->category->count());
        $this->assertInstanceOf(Category::class, $project->category);
    }
    public function test_belongs_to_many_members()
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();
        $project = Project::factory()->create(['user_id' => $user->id, 'category_id' => $category->id]);

        $member = Member::factory()->create();
        $project->members()->sync([$member->id]);

        $this->assertInstanceOf(Collection::class, $project->members);

        $this->assertTrue($project->members->contains($member));
    }
    public function test_belongs_to_user()
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();
        $project = Project::factory()->create(['user_id' => $user->id, 'category_id' => $category->id]);

        $this->assertEquals(1, $project->user->count());
        
        $this->assertInstanceOf(User::class, $project->user);
    }
    public function test_morph_to_many_tags()
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();
        $project = Project::factory()->create(['user_id' => $user->id, 'category_id' => $category->id]);
        
        $this->assertInstanceOf(Collection::class, $project->tags);
        
    }
    public function test_morph_one_image()
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();
        $project = Project::factory()->create(['user_id' => $user->id, 'category_id' => $category->id]);
        $image = Image::factory()->create([
            "imageable_id" => $project->id,
            "imageable_type" => "App\Models\Project",
          ]);
        $this->assertInstanceOf(Image::class, $project->image);
        
    }
    

}
