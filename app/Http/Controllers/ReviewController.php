<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{

    public function index()
    {

    }
    public function create()
    {
        return view('reviews.create');

    }

    // Simpan ulasan ke database
    public function store(Request $request)
    {
       
    }
}
