<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'      => 'User',
                'email'     => 'user@example.com',
                'password'  => Hash::make('12345'),
            ],
        ];
        foreach ($users as $user) {
            User::query()->create($user);
        }
    }
}
