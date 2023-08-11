<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            // roles management
            [
                //1
                'name'=>'create_role',
                'slug'=>'إنشاء الأدوار',
            ],
            [
                //2
                'name'=>'update_role',
                'slug'=>'تعديل الأدوار',
            ],
            [
                //3
                'name'=>'delete_role',
                'slug'=>'حذف الأدوار',
            ],
            [
                //4
                'name'=>'view_roles',
                'slug'=>'استعراض الأدوار',
            ],
            [
                //5
                'name'=>'viewany_roles',
                'slug'=>'استعراض دور واحد',
            ],
            // users management
            [
                //6
                'name'=>'create_user',
                'slug'=>'إنشاء المستخدمين',
            ],
            [
                //7
                'name'=>'view_user',
                'slug'=>'عرض المستخدمين',
            ],
            [
                //8
                'name'=>'update_user',
                'slug'=>'تعديل المستخدمين',
            ],
            [
                //9
                'name'=>'delete_user',
                'slug'=>'حذف المستخدمين',
            ],
            // resources management
            [
                //10
                'name'=>'create_resources',
                'slug'=>'إضافة مواد',
            ],
            [
                //11
                'name'=>'view_resources',
                'slug'=>'استعراض المواد',
            ],
            [
                //12
                'name'=>'update_resources',
                'slug'=>'تعديل المواد',
            ],
            [
                //13
                'name'=>'delete_resources',
                'slug'=>'حذف المواد',
            ],
            // products management
            [
                //14
                'name'=>'create_products',
                'slug'=>'إضافة المنتجات',
            ],
            [
                //15
                'name'=>'add_product_to_hall',
                'slug'=>'إضافة منتج إلى الصالة',
            ],
            [
                //16
                'name'=>'view_products',
                'slug'=>'استعراض المنتجات',
            ],
            [
                //17
                'name'=>'view_products_in_halls',
                'slug'=>'استعراض المنتجات في الصالات',
            ],
            [
                //18
                'name'=>'update_products',
                'slug'=>'تعديل المنتجات',
            ],
            [
                //19
                'name'=>'delete_products',
                'slug'=>'حذف المنتجات',
            ],
            // hall management
            [
                //20
                'name'=>'create_hall',
                'slug'=>'إضافة صالة',
            ],
            [
                //21
                'name'=>'view_hall',
                'slug'=>'استعراض الصالات',
            ],
            [
                //22
                'name'=>'update_hall',
                'slug'=>'تعديل الصالات',
            ],
            [
                //23
                'name'=>'delete_hall',
                'slug'=>'حذف الصالات',
            ],
            // complains management
            [
                //24
                'name'=>'create_complains',
                'slug'=>'إضافة شكوى',
            ],
            [
                //25
                'name'=>'view_complains',
                'slug'=>'استعراض الشكاوي',
            ],
            [
                //26
                'name'=>'respond_to_complains',
                'slug'=>'الرد على الشكاوي',
            ],
            // sales management
            [
                //27
                'name'=>'create_sales',
                'slug'=>'إضافة مبيعات',
            ],
            [
                //28
                'name'=>'view_sales',
                'slug'=>'استعراض المبيعات',
            ],
            [
                //29
                'name'=>'update_sales',
                'slug'=>'تعديل المبيعات',
            ],
            [
                //30
                'name'=>'delete_sales',
                'slug'=>'حذف المبيعات',
            ],
            // departments management
            [
                //31
                'name'=>'create_departments',
                'slug'=>'إضافة قسم',
            ],
            [
                //32
                'name'=>'view_departments',
                'slug'=>'استعراض الأقسام',
            ],
            [
                //33
                'name'=>'update_departments',
                'slug'=>'تعديل الأقسام',
            ],
            [
                //34
                'name'=>'delete_departments',
                'slug'=>'حذف الأقسام',
            ],
            // orders management
            [
                //35
                'name'=>'create_orders',
                'slug'=>'إضافة طلب',
            ],
            [
                //36
                'name'=>'view_orders',
                'slug'=>'استعراض الطلبات',
            ],
            [
                //37
                'name'=>'update_orders',
                'slug'=>'تعديل الطلبات',
            ],
            [
                //38
                'name'=>'delete_orders',
                'slug'=>'حذف الطلبات',
            ],

        ];
        foreach($permissions as $key =>$value)
        {
            Permission::create($value);
        }
    }
}
