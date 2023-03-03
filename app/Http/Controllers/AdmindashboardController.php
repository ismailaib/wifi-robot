<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdmindashboardController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
{
    $books = Book::all();
    $students = User::where('isAdmin', '!=', true)->get();
    return view('admindashboard', compact('books', 'students'));
}
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }





    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    function index(Request $request){

        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');

    }

    function add(Request $request){
        $user= new user;
        $user->name=$request->name;
        $user->email=$request->email;
        $hashedPassword = Hash::make($request->password);
        $user->password = $hashedPassword;
        $user->save();

        return redirect('admindashboard');

    }

    function delete($id){
        $data = User::find($id);
        $data->delete();
        return redirect('admindashboard');
    }

    
}
