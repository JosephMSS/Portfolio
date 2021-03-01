<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>1,
            'category_id'=>rand(1,2),
            'date'=>$this->faker->date($format = 'Y-m-d', $max = 'now'),
            'title'=>$this->faker->sentence(),
            'description'=>$this->faker->text(800),
            'state'=>$this->faker->boolean 
        ];
    }
}
