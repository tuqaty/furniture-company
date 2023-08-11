<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // \App\Models\User::factory(10)->create();
       User::create([
            "name"=>'tuqa',
            'email'=>'tuqa98@gmail.com',
            'password'=>Hash::make('12345678'),
            'image'=>'',
            'phone_number'=>'091090961475',
            'role_id'=>3
       ]);
       User::create([
        "name"=>'sara',
        'email'=>'sara@gmail.com',
        'password'=>Hash::make('123999'),
        'image'=>'',
        'phone_number'=>'0988861475',
        'role_id'=>3

        ]);User::create([
            "name"=>'ahma',
            'email'=>'ahmad88@gmail.com',
            'password'=>Hash::make('ahmadahmad'),
            'image'=>'',
            'phone_number'=>'0917961000',
            'role_id'=>3

        ]);
    }
}
