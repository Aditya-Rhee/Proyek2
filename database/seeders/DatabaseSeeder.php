<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = ['admin', 'user'];

        $users = [
            'admin' => [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'phone' => '08123456789',
            ],
            'user' => [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => bcrypt('password'),
                'phone' => '0812345678',
            ],
        ];

        foreach ($roles as $role) {
            Role::create([
                'name' => $role,
            ]);
        }

        foreach ($users as $user){
            User::create([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => $user['password'],
                'phone' => $user['phone'],
            ]);
        }
    }
}
