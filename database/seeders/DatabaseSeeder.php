<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       $this->call(ProductSeeder::class);
       $this->call(DepartmentSedeer::class);
       $this->call(UserSeeder::class);
       $this->call(PermissionSeeder::class);
       $this->call(RoleSeeder::class);
       $this->call(ResourceSeeder::class);
       $this->call(HallProductSeeder::class);
       $this->call(HallSeeder::class);
    }
}
