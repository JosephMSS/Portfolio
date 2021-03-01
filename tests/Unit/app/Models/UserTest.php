<?php

namespace Tests\Unit\app\Models;

use App\Models\Category;
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
        $category = Category::factory()->create();
        $user = User::factory()->create();
        $this->assertInstanceOf(Collection::class,$user->projects);
    }
}
