<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = [
            [
                'name' => 'super_admin',
                'display_name' => 'Super Admin',
                'description' => 'Super Administrator dengan akses penuh ke seluruh sistem'
            ],
            [
                'name' => 'admin',
                'display_name' => 'Admin',
                'description' => 'Administrator dengan akses terbatas untuk mengelola data'
            ],
            [
                'name' => 'user',
                'display_name' => 'User',
                'description' => 'User biasa dengan akses terbatas'
            ]
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }
    }
}
