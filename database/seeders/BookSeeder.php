<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert(
            [
                [
                    'title' => 'Howl Moving Castle',
                    'author' => 'Hayao Miyazaki',
                    'year' => 2004,
                    'city' => 'Alabasta',
                    'cover' => 'sindo',
                    'categorie_id' => 1,
                    'bookshelf_id' => 1
                ],
                [
                    'title' => 'Charlie Chaplin',
                    'author' => 'Charlie Chaplin',
                    'year' => 2004,
                    'city' => 'Kidul',
                    'cover' => 'sinarmas',
                    'categorie_id' => 2,
                    'bookshelf_id' => 1
                ],
            ]
        );
    }
}
