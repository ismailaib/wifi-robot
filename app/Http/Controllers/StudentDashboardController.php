<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class StudentDashboardController extends Controller
{
    //
    function index(Request $req){



        return view('studentdashboard');

    }



}
