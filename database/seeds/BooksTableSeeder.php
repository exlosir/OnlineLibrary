<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'Письмо к женщине',
            'author_id' => 2,
            'genre_id' => 1,
            'year' => 1924,
            'link_for_image' => '',
            'full_text' => 'example'
        ]);
        DB::table('books')->insert([
            'name' => 'Капитанская дочка',
            'author_id' => 1,
            'genre_id' => 1,
            'year' => 1836,
            'link_for_image' => '',
            'full_text' => 'example'
        ]);
    }
}
