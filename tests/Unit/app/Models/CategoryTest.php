<?php

namespace Tests\Unit\app\Models;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_has_many_projects()
    {
        $category=Category::factory()->create();
        $user=User::factory()->create();
        $project=Project::factory()->create(['user_id'=>$user->id,'category_id'=>$category->id]);

        #  a project exists in the category projects collection
        $this->assertTrue($category->projects->contains($project));

        $this->assertEquals(1,$category->projects->count());

        $this->assertInstanceOf(Collection::class,$category->projects);
    }
}
