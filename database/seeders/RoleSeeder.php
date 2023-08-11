<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'name'=>'admin',
                'slug'=>'مدير النظام',
            ],
            [
                'name'=>'financial_manager',
                'slug'=>'مدير المالية',
            ],
            [
                'name'=>'warehouse_manager',
                'slug'=>'مدير المستودع',
            ],
            [
                'name'=>'hall_manager',
                'slug'=>'مدير صالة',
            ],
            [
                'name'=>'department_manager',
                'slug'=>'مدير قسم',
            ],
        ];

        // $role = Role::create([
        //     'name'=>'admin',
        //     'slug'=>'مدير النظام',
        // ]);
        // $role->permissions()->attach([1,2,3,4,5,6,7,8,13,15,16,17,18,19,20,21,22,24,25,30,31,32,33]);
        // $role = Role::create([
        //     'name'=>'financial_manager',
        //     'slug'=>'مدير المالية',
        // ]);
        // $role->permissions()->attach([27]);
        // $role = Role::create([
        //     'name'=>'warehouse_manager',
        //     'slug'=>'مدير المستودع',
        // ]);
        // $role->permissions()->attach([9,10,11,12]);
        // $role = Role::create([
        //     'name'=>'hall_manager',
        //     'slug'=>'مدير صالة',
        // ]);
        // $role->permissions()->attach([14,15,16,23,26,27,28,29,34,35,36,37]);
        // $role = Role::create([
        //     'name'=>'department_manager',
        //     'slug'=>'مدير قسم',
        // ]);
        // $role->permissions()->attach([35,36,32]);

//        foreach($roles as $key =>$value)
//        {
//            Role::create($value);
//        }
    }
}
