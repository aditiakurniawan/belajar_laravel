<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $admin = User::create([
           'name' => 'Admin',
           'email' => 'admin@localhost',
           'password' => Hash::make('admin123')
       ]);

       $admin->assignRole('admin');
       
       $user = User::create([
           'name' => 'User',
           'email' => 'user@localhost',
           'password' => Hash::make('user123')
       ]);

       $user->assignRole('user');
    }
}
