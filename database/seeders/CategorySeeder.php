<?php

namespace Database\Seeders;
use App\Models\Category;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $data = [
            
            ['name' => [
                'id' => 'E-Government',
                'en' => 'E-Government',
                'ar' => 'الحكومة الإلكترونية'
            ]],
            ['name' => [
                'id' => 'Web Development',
                'en' => 'Web Development',
                'ar' => 'تطوير الويب'
            ]],
            ['name' => [
                'id' => 'Mobile Development',
                'en' => 'Mobile Development',
                'ar' => 'تطوير الهاتف المحمول'
            ]],
            /*['name' => 'E-Government'],
            ['name' => 'Web Development'],
            ['name' => 'Mobile Development']*/
            
            
          
        ];
        foreach ($data as $category) {
            Category::create($category);
        }
            
        //
    }
}
