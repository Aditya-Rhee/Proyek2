<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Mendapatkan ID role admin dan owner
         $adminRoleId = Role::where('role_name', 'admin')->value('id');
         $pelangganRoleId = Role::where('role_name', 'pelanggan_users')->value('id');
 
         // Buat user dengan role admin
         User::factory()->create([
             'name' => 'Admin',
             'email' => 'admin@gmail.com',
             'password' => Hash::make('password'), 
             'role_id' => $adminRoleId,
         ]);
 
         // Buat user dengan role owner
         User::factory()->create([
             'name' => 'Pelanggan',
             'email' => 'pelanggan@gmail.com',
             'password' => Hash::make('password'), 
             'role_id' => $pelangganRoleId,
         ]);
    }
}
