<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::insert([
            [
                'name' => 'test_user',
                'email' => 'test_user@com',
                'password' => Hash::make('test_user'),
            ],
        ]);
    }
}
