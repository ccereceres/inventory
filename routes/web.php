<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TransferController;
use App\Http\Controllers\WarehouseController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/* Products */
// Index
Route::get('/products', [ProductController::class, 'index'])->middleware(['auth', 'verified'])->name('products.index');

// Create
Route::get('/products/create', [ProductController::class, 'create'])->middleware(['auth', 'verified'])->name('products.create');

// Store
Route::post('/products', [ProductController::class, 'store'])->middleware(['auth', 'verified'])->name('products.store');

// Show
Route::get('/products/{product}', [ProductController::class, 'show'])->middleware(['auth', 'verified'])->name('products.show');

// Edit
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware(['auth', 'verified'])->name('products.edit');

// Update
Route::put('/products/{product}', [ProductController::class, 'update'])->middleware(['auth', 'verified'])->name('products.update');

// Destroy
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware(['auth', 'verified'])->name('products.destroy');


/* Warehouses */
// Index
Route::get('/warehouses', [WarehouseController::class, 'index'])->middleware(['auth', 'verified'])->name('warehouses.index');

// Create
Route::get('/warehouses/create', [WarehouseController::class, 'create'])->middleware(['auth', 'verified'])->name('warehouses.create');

// Store
Route::post('/warehouses', [WarehouseController::class, 'store'])->middleware(['auth', 'verified'])->name('warehouses.store');

// Edit
Route::get('/warehouses/{warehouse}/edit', [WarehouseController::class, 'edit'])->middleware(['auth', 'verified'])->name('warehouses.edit');

// Update
Route::put('/warehouses/{warehouse}', [WarehouseController::class, 'update'])->middleware(['auth', 'verified'])->name('warehouses.update');

// Destroy
Route::delete('/warehouses/{warehouse}', [WarehouseController::class, 'destroy'])->middleware(['auth', 'verified'])->name('warehouses.destroy');

/* Transfers */
// Index
Route::get('/transfers', [TransferController::class, 'index'])->middleware(['auth', 'verified'])->name('transfers.index');

// Create
Route::get('/transfers/create', [TransferController::class, 'create'])->middleware(['auth', 'verified'])->name('transfers.create');

// Store
Route::post('/transfers', [TransferController::class, 'store'])->middleware(['auth', 'verified'])->name('transfers.store');

// Show
Route::get('/transfers/{transfer}', [TransferController::class, 'show'])->middleware(['auth', 'verified'])->name('transfers.show');

// Confirm
Route::put('/transfers/{transfer}', [TransferController::class, 'confirmTransfer'])->middleware(['auth', 'verified'])->name('transfers.confirm');

// Destroy
Route::delete('/transfers/{transfer}', [TransferController::class, 'destroy'])->middleware(['auth', 'verified'])->name('transfers.destroy');



require __DIR__.'/auth.php';
