<?php

namespace Tests\Unit\app\Models;

use App\Models\Category;
use App\Models\Member;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class MemberTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use RefreshDatabase;
    public function test_belongs_to_many_projects()
    {
        $member=Member::factory()->create();
        $this->assertInstanceOf(Collection::class, $member->projects);
    }
}
