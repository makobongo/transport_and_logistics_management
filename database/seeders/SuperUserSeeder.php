<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class SuperUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'itsupport',
            'email' => 'super.admin@sixx-spirits.com',
            'password' => Hash::make('password'),
            'is_active' => 1
        ]);

        $superAdmin = Role::create([
            'name' => 'Super Admin'
        ]);

        $user->assignRole($superAdmin);
    }
}
