<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([[
         'name' => 'LG Mobile2',
         'price' => '210000',
         'description' => "a smartphone with 4gb ram",
         'category'=>'mobile',
         'gallery'=>'https://m.media-amazon.com/images/I/51KJE22BKrL._SX679_.jpg'
        ],
        [
         'name' => 'LG Mobile3',
         'price' => '310000',
         'description' => "a smartphone with 4gb ram",
         'category'=>'mobile',
         'gallery'=>'https://m.media-amazon.com/images/I/51KJE22BKrL._SX679_.jpg'
        ],
        [
         'name' => 'LG Mobile4',
         'price' => '410000',
         'description' => "a smartphone with 4gb ram",
         'category'=>'mobile',
         'gallery'=>'https://m.media-amazon.com/images/I/51KJE22BKrL._SX679_.jpg'
        ],
        [
         'name' => 'LG Mobile5',
         'price' => '510000',
         'description' => "a smartphone with 4gb ram",
         'category'=>'mobile',
         'gallery'=>'https://m.media-amazon.com/images/I/51KJE22BKrL._SX679_.jpg'
        ]]);
    }
}
