<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DemoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('advertisings')->insert([
            'admin_title' => 'Главная',
            'title' => 'Главная страница',
            'slug' => 'main-page',
            'desktopimage' => 'http://via.placeholder.com/940x150',
            'mobileimage' => 'http://via.placeholder.com/600x400',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('advertisings')->insert([
            'admin_title' => '2',
            'title' => '2 страница',
            'slug' => 'main-page',
            'desktopimage' => 'http://via.placeholder.com/940x150',
            'mobileimage' => 'http://via.placeholder.com/600x400',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('advertisings')->insert([
            'admin_title' => '3',
            'title' => '3 страница',
            'slug' => 'main-page',
            'desktopimage' => 'http://via.placeholder.com/940x150',
            'mobileimage' => 'http://via.placeholder.com/600x400',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('advertisings')->insert([
            'admin_title' => '4',
            'title' => '4 страница',
            'slug' => 'main-page',
            'desktopimage' => 'http://via.placeholder.com/940x150',
            'mobileimage' => 'http://via.placeholder.com/600x400',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('advertisings')->insert([
            'admin_title' => '5',
            'title' => '5 страница',
            'slug' => 'main-page',
            'desktopimage' => 'http://via.placeholder.com/940x150',
            'mobileimage' => 'http://via.placeholder.com/600x400',
            'status' => 'PUBLISHED',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('journal_categories')->insert([
            'title' => 'Категория 1',
            'slug' => 'category-1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('journal_categories')->insert([
            'title' => 'Категория 2',
            'slug' => 'category-2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('journal_categories')->insert([
            'title' => 'Категория 3',
            'slug' => 'category-3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('journal_categories')->insert([
            'title' => 'Категория 4',
            'slug' => 'category-4',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('recommend_categories')->insert([
            'title' => 'Категория 1',
            'slug' => 'category-1',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('recommend_categories')->insert([
            'title' => 'Категория 2',
            'slug' => 'category-2',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('recommend_categories')->insert([
            'title' => 'Категория 3',
            'slug' => 'category-3',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('recommend_categories')->insert([
            'title' => 'Категория 4',
            'slug' => 'category-4',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        DB::table('settings')->insert([
            'facebook' => '##',
            'instagram' => '##',
            'youtube' => '##',
            'twitter' => '##',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        
    }
}
