<?php

namespace Database\Seeders;

use App\Models\HallProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HallProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        HallProduct::create([
            'quantity'=>23,
            'quantity_limit'=>20,
            'hall_id'=>1,
            'product_id'=>1
        ]);

        HallProduct::create([
            'quantity'=>17,
            'quantity_limit'=>15,
            'hall_id'=>1,
            'product_id'=>2
        ]);

        HallProduct::create([
            'quantity'=>32,
            'quantity_limit'=>20,
            'hall_id'=>1,
            'product_id'=>3
        ]);

        HallProduct::create([
            'quantity'=>18,
            'quantity_limit'=>15,
            'hall_id'=>2,
            'product_id'=>1
        ]);

        HallProduct::create([
            'quantity'=>35,
            'quantity_limit'=>25,
            'hall_id'=>2,
            'product_id'=>2
        ]);

        HallProduct::create([
            'quantity'=>13,
            'quantity_limit'=>10,
            'hall_id'=>2,
            'product_id'=>3
        ]);
    }
}
