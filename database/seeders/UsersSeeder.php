<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [ 
            [
                'username' => 'admin',
                'password' => bcrypt('admin')
            ]
        ];

            foreach ($userData as $key => $val) {
                User::create($val);
                # code...
            }
    }
}
