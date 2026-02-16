<?php

use App\Http\Controllers\UiFramework\UiElementsPageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::prefix('ui-elements')->middleware('auth')->controller(UiElementsPageController::class)->name('ui-')->group(function () {
    Route::get('alerts', function () {
        return Inertia::render('ui-elements/Alerts');
    })->name('alerts');
    Route::get('avatars', function () {
        return Inertia::render('ui-elements/Avatars');
    })->name('avatars');
    Route::get('badges', function () {
        return Inertia::render('ui-elements/Badges');
    })->name('badges');
    Route::get('buttons', function () {
        return Inertia::render('ui-elements/Buttons');
    })->name('buttons');
    Route::get('cards', function () {
        return Inertia::render('ui-elements/Cards');
    })->name('cards');
    Route::get('carousels', function () {
        return Inertia::render('ui-elements/Carousels');
    })->name('carousels');
    Route::get('dropdowns', function () {
        return Inertia::render('ui-elements/Dropdowns');
    })->name('dropdowns');
    Route::get('images', function () {
        return Inertia::render('ui-elements/Images');
    })->name('images');
    Route::get('links', function () {
        return Inertia::render('ui-elements/Links');
    })->name('links');
});
