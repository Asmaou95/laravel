<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            [
                'title' => 'l\'enfant noir',
                'author_id' => 1,
                'publication' => 1953,
                'genre' => 'roman',
                'synopsis' => 'Laye est un jeune qui vit avec ses parents, dans son village.'
    
            ],
    
            [
                'title' => 'la Huitième couleur',
                'author_id' => 2,
                'publication' => 1983,
                'genre' => 'comédie',
                'synopsis' => 'une terre plate.'
                    
            ],
    
            [
                'title' => 'L\' épée de vérité',
                'author_id' => 3,
                'publication' => 2012,
                'genre' => 'Fantaisie',
                'synopsis' => 'un forestier avec son épé.'
            ]
            
            ]); 
    }
}
