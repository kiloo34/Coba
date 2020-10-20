<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'title'     => 'Post 1',
                'slug'      => 'post-1',
                'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis natus quas dolores impedit at nesciunt dicta, illum ab deleniti maxime, odio accusamus inventore dolor aperiam fuga provident illo quod earum!',
                'user_id'   => 1
            ],
            [
                'title'     => 'Post 2',
                'slug'      => 'post-2',
                'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis natus quas dolores impedit at nesciunt dicta, illum ab deleniti maxime, odio accusamus inventore dolor aperiam fuga provident illo quod earum!',
                'user_id'   => 1
            ],
            [
                'title'     => 'Post 3',
                'slug'      => 'post-3',
                'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis natus quas dolores impedit at nesciunt dicta, illum ab deleniti maxime, odio accusamus inventore dolor aperiam fuga provident illo quod earum!',
                'user_id'   => 1
            ]
        ];

        foreach ($posts as $p) {
            Post::create($p);
        }
    }
}
