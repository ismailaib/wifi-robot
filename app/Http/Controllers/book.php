<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class user extends Controller
{
    public function show()
    {
        $books = book::all();
        return view('admindashboard', compact('books'));
    }
}
