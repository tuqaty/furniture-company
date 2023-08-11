<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::create ( [
             'name' => 'design',
                'hour_price' => 50000,
                'user_id' => 1

        ]);
        Department::create ( [
                'name' => 'implementation',
                'hour_price' => 60000,
                'user_id' => 2

        ]);
        Department::create ( [
                'name' => 'Paint and spray',
                'hour_price' => 80000,
                'user_id' => 3

        ]);
        Department::create ( [
                'name' => 'upholstery',
                'hour_price' => 100000,
                'user_id' => 4

        ]);
        Department::create (  [
                'name' => 'processing',
                'hour_price' => 20000,
                'user_id' => 5

        ]);

            // foreach($department as $key =>$value)
            // {
            //     Department::create($value);
            // }
    }
}
