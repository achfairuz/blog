<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-design',
            'color' => 'red'
        ]);
        Category::create([
            'name' => 'UI Design',
            'slug' => 'Ui-Design',
            'color' => 'green'
        ]);
        Category::create([
            'name' => 'UX Design',
            'slug' => 'UX-design',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'AI',
            'slug' => 'artificial-Intelligence',
            'color' => 'yellow'
        ]);
        //  Category::factory(5)->create(),
    }
}
