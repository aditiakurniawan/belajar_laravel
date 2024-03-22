<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\StudentClass;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StudentClass::create([
            'name' => 'X'
        ]);
        StudentClass::create([
            'name' => 'XI'
        ]);
        StudentClass::create([
            'name' => 'XII'
        ]);
    }
}
