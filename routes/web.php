<?php

use App\Domain\Support\Scrapers\Embed;
use App\Http\Livewire\TagShow;
use App\Http\Livewire\TagIndex;
use App\Http\Livewire\LinkShow;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\LinkIndex;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('welcome')->middleware('guest');

Route::prefix('dashboard')->group(function () {
    // Dashboard
    Route::get('/', Dashboard::class)->name('dashboard')->middleware('auth');

    // Tags
    Route::get('/tags', TagIndex::class)->name('dashboard.tags.index')->middleware('auth');
    Route::get('/tags/{tag}', TagShow::class)->name('dashboard.tags.show')->middleware('auth');

    // Links
    Route::get('/links', LinkIndex::class)->name('dashboard.links.index')->middleware('auth');
    Route::get('/links/{link}', LinkShow::class)->name('dashboard.links.show')->middleware('auth');
});

// Route::get('/test', function (Embed $client) {
//     $client->create('https://laravel-livewire.com/docs/2.x/reference/s2');
//     dd($client->data);
// });
