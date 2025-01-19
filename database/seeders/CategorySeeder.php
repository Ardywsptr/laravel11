<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();

        $categories = 
        [
            [
                'name' => 'Frontend Web',
                'color' => 'red',
            ],
            [
                'name' => 'Backend Web',
                'color' => 'blue',
            ],
            [
                'name' => 'UI UX',
                'color' => 'green',
            ],
            [
                'name' => 'CI CD',
                'color' => 'yellow',
            ],
            [
                'name' => 'Testing',
                'color' => 'purple',
            ],
        ];
        
        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
                'slug' => Str::slug($category['name']),
                'color' => $category['color'],
            ]);
        }
    }
}
