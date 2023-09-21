<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::insert([
            [
                'image' => 'chairgaming1.jpg',
                'name' => 'chair gaming n1',
                'description' => 'chair gaming new bla blapatati pa tata gaming chaire for gaming  ',
                'stock' => 7,
                'prix' => 750,
                'type' => 'gaming',
            ],
            [
                'image' => 'chairgaming2.jpg',
                'name' => 'chair gaming n2',
                'description' => 'chair gaming new bla blapatati pa tata gaming chaire for gaming  ',
                'stock' => 3,
                'prix' => 300,
                'type' => 'gaming',
            ],
            [
                'image' => 'chairgaming3.jpg',
                'name' => 'chair gaming n3',
                'description' => 'chair gaming new bla blapatati pa tata  chaire for   ',
                'stock' => 4,
                'prix' => 540,
                'type' => 'gaming',
            ],
            [
                'image' => 'cloth1.jpg',
                'name' => 'chair cloth n1',
                'description' => 'chair cloth new bla blapatati pa tata  chaire for   ',
                'stock' => 1,
                'prix' => 320,
                'type' => 'cloth',
            ],
            [
                'image' => 'cloth2.jpg',
                'name' => 'chair cloth n2',
                'description' => 'chair cloth new bla blapatati pa tata  chaire for   ',
                'stock' => 9,
                'prix' => 140,
                'type' => 'cloth',

            ],
            [
                'image' => 'cloth3.jpg',
                'name' => 'chair cloth n3',
                'description' => 'chair cloth new bla blapatati pa tata  chaire for   ',
                'stock' => 11,
                'prix' => 50,
                'type' => 'cloth',

            ],
            [
                'image' => 'cloth4.jpg',
                'name' => 'chair cloth n4',
                'description' => 'chair cloth new bla blapatati pa tata  chaire for   ',
                'stock' => 1,
                'prix' => 55,
                'type' => 'cloth',

            ],
            [
                'image' => 'cloth5.jpg',
                'name' => 'chair cloth n5',
                'description' => 'chair cloth new bla blapatati pa tata  chaire for   ',
                'stock' => 6,
                'prix' => 90,
                'type' => 'cloth',

            ],
            [
                'image' => 'plastic1.jpg',
                'name' => 'chair plastic n1',
                'description' => 'chair plastic new bla blapatati pa tata  chaire for   ',
                'stock' => 8,
                'prix' => 110,
                'type' => 'plastic',

            ],
            [
                'image' => 'plastic2.jpg',
                'name' => 'chair plastic n2',
                'description' => 'chair plastic new bla blapatati pa tata  chaire for   ',
                'stock' => 20,
                'prix' => 160,
                'type' => 'plastic',

            ],
            [
                'image' => 'plastic3.jpg',
                'name' => 'chair plastic n3',
                'description' => 'chair plastic new bla blapatati pa tata  chaire for   ',
                'stock' => 7,
                'prix' => 410,
                'type' => 'plastic',

            ],
            [
                'image' => 'plastic4.jpg',
                'name' => 'chair plastic n4',
                'description' => 'chair plastic new bla blapatati pa tata  chaire for   ',
                'stock' => 8,
                'prix' => 50,
                'type' => 'plastic',

            ],
            [
                'image' => 'plastic5.jpg',
                'name' => 'chair plastic n5',
                'description' => 'chair plastic new bla blapatati pa tata  chaire for   ',
                'stock' => 4,
                'prix' => 70,
                'type' => 'plastic',

            ],
            [
                'image' => 'plastic6.jpg',
                'name' => 'chair plastic n6',
                'description' => 'chair plastic new bla blapatati pa tata  chaire for   ',
                'stock' => 1,
                'prix' => 120,
                'type' => 'plastic',

            ],
            [
                'image' => 'wood1.jpg',
                'name' => 'chair wood n1',
                'description' => 'chair wood new bla blapatati pa tata  chaire for   ',
                'stock' => 11,
                'prix' => 54,
                'type' => 'wood',

            ],
            [
                'image' => 'wood2.jpg',
                'name' => 'chair wood n2',
                'description' => 'chair wood new bla blapatati pa tata  chaire for   ',
                'stock' => 5,
                'prix' => 90,
                'type' => 'wood',

            ],
            [
                'image' => 'wood3.jpg',
                'name' => 'chair wood n3',
                'description' => 'chair wood new bla blapatati pa tata  chaire for   ',
                'stock' => 4,
                'prix' => 75,
                'type' => 'wood',

            ],
            [
                'image' => 'wood4.jpg',
                'name' => 'chair wood n4',
                'description' => 'chair wood new bla blapatati pa tata  chaire for   ',
                'stock' => 10,
                'prix' => 80,
                'type' => 'wood',

            ],
            [
                'image' => 'wood5.jpg',
                'name' => 'chair wood n5',
                'description' => 'chair wood new bla blapatati pa tata  chaire for   ',
                'stock' => 2,
                'prix' => 100,
                'type' => 'wood',

            ],
            [
                'image' => 'wood6.jpg',
                'name' => 'chair wood n6',
                'description' => 'chair wood new bla blapatati pa tata  chaire for   ',
                'stock' => 3,
                'prix' => 140,
                'type' => 'wood',

            ],

        ]);
    }
}
