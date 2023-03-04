<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
class BookplaceController extends Controller
{
    //

    function index(){

        return view('bookplace');
    }
    public function book()
{
    $books = Book::all();
    return view('bookplace', compact('books'));
}
}
?>