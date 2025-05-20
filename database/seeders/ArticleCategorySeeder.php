<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ArticleCategorySeeder extends Seeder
{
    public function run()
    {
        // Menambahkan data kategori artikel ke dalam tabel
        DB::table('tabel_article_category')->insert([
            [
                'article_category_name' => 'Technology',
                'slug' => 'technology',
                'meta_keyword' => 'technology, innovation, gadgets',
                'meta_description' => 'All about technology and innovations in the tech world.',
                'created' => Carbon::now(),
                'author' => 'admin',
                'updated' => Carbon::now(),
                'updater' => 'admin',
                'status' => 1, // Assuming 1 means active
            ],
            [
                'article_category_name' => 'Lifestyle',
                'slug' => 'lifestyle',
                'meta_keyword' => 'lifestyle, wellness, fitness',
                'meta_description' => 'Lifestyle articles about wellness and fitness.',
                'created' => Carbon::now(),
                'author' => 'admin',
                'updated' => Carbon::now(),
                'updater' => 'admin',
                'status' => 1, // Assuming 1 means active
            ],
            [
                'article_category_name' => 'Health',
                'slug' => 'health',
                'meta_keyword' => 'health, wellness, nutrition',
                'meta_description' => 'Health tips and nutrition information.',
                'created' => Carbon::now(),
                'author' => 'admin',
                'updated' => Carbon::now(),
                'updater' => 'admin',
                'status' => 1, // Assuming 1 means active
            ],
            // Add more categories as needed
        ]);
    }
}
