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
        DB::table('authors')->insert([
            'author_name' => 'Александр Сергеевич Пушкин'
        ]);
        DB::table('authors')->insert([
            'author_name' => 'Сергей Александрович Есенин'
        ]);
    }
}
