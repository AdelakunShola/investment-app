<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('users')->insert([

            //Admin
            [
             
                'email' => 'admin@gmail.com',
                'password' => Hash::make('111'),
                'role' => 'admin',
            ],

            //User

            [
              
                'email' => 'user@gmail.com',
                'password' => Hash::make('222'),
                'role' => 'user',
            ],

        ]);
    }
    }

