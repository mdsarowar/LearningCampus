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
        $user = User::where('email', 'super_admin@learningcampus.com')->first();
        if (is_null($user)) {
            $user = new User();
            $user->name = 'Super Admin';
            $user->email = 'super_admin@learningcampus.com';
            $user->phoneNumber = '01817240585';
            $user->password = Hash::make('superadmin');
            $user->role = 'super_admin';
            $user->save();
        }
    }
}
