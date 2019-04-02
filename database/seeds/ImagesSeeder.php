<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
            'url' => 'https://example.com/user.jpg',
            'imageable_id' => 1,
            'imageable_type' => 'User',
        ]);

        DB::table('images')->insert([
            'url' => 'https://example.com/post.jpg',
            'imageable_id' => 1,
            'imageable_type' => 'Post',
        ]);
    }
}
