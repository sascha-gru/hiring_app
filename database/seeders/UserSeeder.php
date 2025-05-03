<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'username' => 'best_user1', 
            'email' => 'best_user1@email.com', 
            'password' => 'besttest1']);
        User::Create([
            'username' => 'geek_user2', 
            'email' => 'geek_user2@email.com', 
            'password' => 'geektest2']);
    }
}
