<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Student::create([
        //     'name' => 'John Doe',
        //     'address' => '123 Main St, Anytown USA',
        // ]);

        Student::factory()->count(10)->create();
    }

}
