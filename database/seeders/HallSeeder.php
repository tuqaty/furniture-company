<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hall;
class HallSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hall::create([
            'name' =>"midan" ,
            'address'=> "midan_mansour",
            'telephone'=> "099465826",
            'user_id'=>1
        ]);
        Hall::create([
            'name' => "mazzah",
            'address'=> "mazzah-shikh-saad",
            'telephone'=> "0998786756" ,
            'user_id'=> 3
        ]);
        Hall::create([
            'name' => "zabadni",
            'address'=> "zabadani",
            'telephone'=> "0992323465",
            'user_id'=> 2
        ]);
    }
}
