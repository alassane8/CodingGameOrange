<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'Title' => 'Student Article',
            'Author' => 'WADE Alassane',
            'Publication_Date' => '2024-11-07',
            'Category' => 'Science',
            'Content' => '**explications scientifiques**',
            'Source' => 'Le Monde'
        ]);
    }
}
