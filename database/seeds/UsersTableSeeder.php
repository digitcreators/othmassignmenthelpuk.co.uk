<?php

use App\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $admin = User::create([
            'name'           => 'Admin',
            'email'          => 'admin@admin.com',
            'remember_token' => null,
            'email_verified_at' => null,
            'password'      => Hash::make('password'),
            'created_at'    => null,
            'updated_at'    => null,
            'email_verified_at' => null,
        ]);

        $admin->roles()->sync(1);
    }
}
