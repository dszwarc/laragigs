<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // get and show all listings
    public function index(){
        return view('listings.index', [
            'heading' => 'Latest Listings',
            'listings' => Listing::all()
        ]);
    }
    // get and show single listing
    public function show(Listing $listing){
        if ($listing){
            return view('listings.show', [
                'listing' => $listing
            ]);
        } 
    }
}
