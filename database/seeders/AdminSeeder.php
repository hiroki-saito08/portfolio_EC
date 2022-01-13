<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Admin::insert([
            [
                'name' => 'test_admin',
                'email' => 'test_admin@com',
                'password' => Hash::make('test_admin'),
            ],
        ]);
    }
}
