<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;


//Route for all listings. Use all() func from model to find all listings
Route::get('/', [ListingController::class, 'index']);

// Route for single listing. Use {id} to search for listing ID with model in database and return listing
Route::get('/listings/{listing}', [ListingController::class,'show']);
