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
        User::create(
        [
            'name' => 'mas admin',
            'email' => 'admin@gmail.com ',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]); 
        User::create(
        [
            'name' => 'mas mentor',
            'email' => 'mentor@gmail.com ',
            'password' => Hash::make('mentor123'),
            'role' => 'mentor'
        ]); 
        User::create(
        [
            'name' => 'mas peserta',
            'email' => 'peserta@gmail.com ',
            'password' => Hash::make('peserta123'),
            'role' => 'peserta'
        ]); 
    }
}
