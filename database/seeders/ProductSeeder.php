<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $porduct = [
        [
            'name' => 'chair',
            'description' =>'its description for chair',
            'profit_rate' => 50,
            'image'=> 'empty',

        ],
        [
            'name' => 'Sufia',
            'description' =>'its description for Sufia',
            'profit_rate' => 40,
            'image'=> 'empty',

        ],
        [
            'name' => 'treasury',
            'description' =>'its description for treasury',
            'profit_rate' => 60,
            'image'=> 'empty',

        ]
        ];
        foreach($porduct as $key =>$value)
        {
            Product::create($value);
        }
    }
}
