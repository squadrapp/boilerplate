<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $role = Role::create(['name' => 'Admin']);
        $user = User::create([
            'name' => 'boilerplate',
            'email' => 'boilerplate@squadraagencia.com',
            'password' => Hash::make('password')
        ]);
        $user->assignRole($role);
    }
}