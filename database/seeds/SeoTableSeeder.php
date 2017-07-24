<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SeoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seos')->insert([
            'title' => 'Главная страница',
            'seo_title' => 'Журнал Vesna',
            'seo_description' => 'Vesna – журнал о современной косметологии и эстетической медицине',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('seos')->insert([
            'title' => 'Журнал',
            'seo_title' => 'Журнал Vesna - первый в Украине журнал о современной косметологии и не только',
            'seo_description' => 'Новости косметологии, психологии и советы экспертов в журнале Vesna',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('seos')->insert([
            'title' => 'Эксперты',
            'seo_title' => 'Эксперты журнала Vesna',
            'seo_description' => 'Лидеры мнений и эксперты журнала Vesna',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('seos')->insert([
            'title' => 'Галерея',
            'seo_title' => 'Галерея Vesna',
            'seo_description' => 'Галерея фото Vesna',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('seos')->insert([
            'title' => 'Партнеры',
            'seo_title' => 'Наши партнеры - Vesna',
            'seo_description' => 'Журнал "Vesna" - нам доверяют',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('seos')->insert([
            'title' => 'Контакты',
            'seo_title' => 'Контакты Vesna',
            'seo_description' => 'Мы всегда рады общению - журнала Vesna',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('seos')->insert([
            'title' => 'Рекомендуем',
            'seo_title' => 'Наши рекомендации',
            'seo_description' => 'Любимые места и заведения - Vesna',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
        DB::table('seos')->insert([
            'title' => 'Купить журнал',
            'seo_title' => 'Купить журнал "Vesna"',
            'seo_description' => 'Полезный журнал для косметологов и женщин. Новый номер, новые форматы',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);
    }
}
