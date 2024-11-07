<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticlesTableSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'Title' => 'Article test',
            'Author' => 'ECE student',
            'Publication_Date' => '2024-01-01',
            'Category' => 'Education',
            'Content' => 'Test',
            'Source' => 'Equipe'
        ]);
    }
}
