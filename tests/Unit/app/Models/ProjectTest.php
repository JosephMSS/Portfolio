<?php

namespace Tests\Unit\app\Models;

use App\Models\Category;
use App\Models\Project;
use App\Models\User;
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
        $category=Category::factory()->create();
        $user=User::factory()->create();
        $project=Project::factory()->create(['user_id'=>$user->id,'category_id'=>$category->id]);

         $this->assertEquals(1,$project->category->count());
         $this->assertInstanceOf(Category::class,$project->category);
    }
}
