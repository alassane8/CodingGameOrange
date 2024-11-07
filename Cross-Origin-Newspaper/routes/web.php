<?php

use App\Http\Controllers\ArticleController;

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/{id}', [ArticleController::class, 'show']);
