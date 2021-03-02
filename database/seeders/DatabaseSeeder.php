<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Image;
use App\Models\Member;
use App\Models\Profile;
use App\Models\Project;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        Member::factory(3)->create();

        User::factory(1)->create()->each(function ($user) {
            $user->profile()->save(Profile::factory()->make());
            $user->image()->save(Image::factory()->make([
                'url' => 'https://www.fillmurray.com/1024/1024/'
            ]));
        });

        Category::factory()->create(['name' => 'main']);
        Category::factory()->create(['name' => 'secondary']);
        Tag::factory(6)->create();

        Project::factory(5)->create()->each(function ($project) {
            $project->image()->save(Image::factory()->make());

            // $project->user()->attach(1);


            $project->members()->attach($this->array(rand(1, 3)));
            $project->tags()->attach($this->array(rand(1, 6)));
        });
    }
    public function array($max)
    {
        $values = [];

        for ($i = 1; $i < $max; $i++) {
            $values[] = $i;
        }

        return $values;
    }
}
