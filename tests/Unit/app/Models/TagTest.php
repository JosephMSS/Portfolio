<?php

namespace Tests\Unit\app\Models;

use App\Models\Category;
use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TagTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_morph_by_many_projects()
    {
        $category = Category::factory()->create();
        $user = User::factory()->create();
        $project = Project::factory()->create(['user_id' => $user->id, 'category_id' => $category->id]);
        $tag=Tag::factory()->create();
        
        $this->assertInstanceOf(Collection::class, $tag->projects);
    }
}
