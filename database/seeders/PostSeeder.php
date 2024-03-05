<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Post;

use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();

        for($i = 0; $i < 10; $i++) {

            $titleForMassAssigment = fake()->sentence();
            $slugForMassAssigment = Str::slug($titleForMassAssigment);
            $postWithMassAssigment = Post::create([
                'title' => $titleForMassAssigment,
                'slug' => $slugForMassAssigment,
                'content' => fake()->paragraph(),
            ]);
        }
    }
}
