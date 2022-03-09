<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = [
            [
                'title' => 'image1', 
                'slug' => ' INI FOTO-01!!!', 
                'image' => 'image-01.jpg', 
                'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis doloremque saepe, ea soluta perspiciatis vitae!', 
                'draft' => 0 
            ],
            [
                'title' => 'image2', 
                'slug' => ' INI FOTO-02!!!', 
                'image' => 'image-02.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'image3', 
                'slug' => ' INI FOTO-03!!!', 
                'image' => 'image-03.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'image4', 
                'slug' => ' INI FOTO-04!!!', 
                'image' => 'image-04.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'image5', 
                'slug' => ' INI FOTO-05!!!', 
                'image' => 'image-05.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'image6', 
                'slug' => ' INI FOTO-06!!!', 
                'image' => 'image-06.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'image7', 
                'slug' => ' INI FOTO-07!!!', 
                'image' => 'image-07.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
            [
                'title' => 'image8', 
                'slug' => ' INI FOTO-08!!!', 
                'image' => 'image-08.jpg', 
                'content' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio, porro?', 
                'draft' => 0 
            ],
        ];

        DB::table('our_product')->insert($store);
    }
}
