<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        Category::truncate();
        User::truncate();
        Post::truncate();


        $user = User::factory()->create();


        $cat1 = Category::factory()->create();
        $cat2 = Category::factory()->create();

        Post::factory(5)->create([
            'user_id' => $user->id,
            'category_id' => $cat1->id,
        ]);
        Post::factory(2)->create([
            'user_id' => $user->id,
            'category_id' => $cat2->id,
        ]);
    }
}
