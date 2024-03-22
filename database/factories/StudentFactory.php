<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\StudentClass;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    protected $model = Student::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        StudentClass::inRandomOrder()->first();

        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'class_id' => StudentClass::inRandomOrder()->first()->id
        ];
    }
}
