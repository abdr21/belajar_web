<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => [
                'id' => 'Laravel',
                'en' => 'Laravel',
                'ar' =>  'لارافيل'
            ]],
            ['name' => [
                'id' => 'PHP',
                'en' => 'PHP',
                'ar' =>  'بي إتش بي'
            ]],
            ['name' => [
                'id' => 'JavaScript',
                'en' => 'JavaScript',
                'ar' =>  'جافا سكريبت'
            ]],
            ['name' => [
                'id' => 'HTML',
                'en' => 'HTML',
                'ar' =>  'إتش تي إم إل'
            ]],
            ['name' => [
                'id' => 'CSS',
                'en' => 'CSS',
                'ar' =>  'سي إس إس'
            ]],
            ['name' => [
                'id' => 'MySQL',
                'en' => 'MySQL',
                'ar' =>  'ماي إس كيو إل'
            ]],
        
            /*['name' => 'PHP'],
            ['name' => 'JavaScript'],
            ['name' => 'HTML'],
            ['name' => 'CSS'],
            ['name' => 'MySQL']*/
        ];
        foreach ($data as $tag) {
            \App\Models\Tag::create($tag);
        }
    
        //
    }
}
