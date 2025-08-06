<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $catefories = [
            'Technology',
            'Health',
            'Lifestyle',
            'Education',
            'Travel',
            'Food',
            'Finance',
            'Entertainment'
        ];
        
        foreach ($catefories as $cate) {
            Category::factory()->create([
                'name' => $cate,
                'slug' => \Illuminate\Support\Str::slug($cate),
                'description' => "This is the description for $cate category."
            ]);
        }

        Post::factory()->count(50)->create();
    }
}
