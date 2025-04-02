<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\CategorieController;

// Routes front produit
Route::get( '/', [ProduitController::class, 'index'])->name('home');
Route::get('/produits', [ProduitController::class, 'index'])->name('produits.index');
Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
Route::post('/produits', [ProduitController::class, 'store'])->name('produits.store');
Route::get('/produits/{id}', [ProduitController::class, 'show'])->name('produits.show');
Route::get('/produits/{id}/edit', [ProduitController::class, 'edit'])->name('produits.edit');
Route::put('/produits/{id}', [ProduitController::class, 'update'])->name('produits.update');
Route::delete('/produits/{id}', [ProduitController::class, 'destroy'])->name('produits.destroy');

// Routes front categorie
Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
Route::get('/categories/{id}', [CategorieController::class, 'show'])->name('categories.show');
Route::get('/categories/{id}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{id}', [CategorieController::class, 'update'])->name('categories.update');
Route::delete('/categories/{id}', [CategorieController::class, 'destroy'])->name('categories.destroy');

// Routes front contact
Route::get('/contact', [ContactController::class, 'show'])->name('contact');

// Routes front recherche
Route::get('/recherche', [ProduitController::class, 'search'])->name('produits.search');


//Routes admin
// Route::middleware('auth.admin')->prefix('admin')->group(function () {
//     Route::ressource('categories', AdminCategorieController::class);
//     Route::ressource('produits', AdminProduitController::class);
// })->name('admin');





