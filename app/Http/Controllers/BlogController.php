<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function form()
    {
        return view('bloc.accueil');
    }
    public function store(Request $request)
    {
        return view('bloc.form');
    }
    public function store2(Request $request)
    {
        return view('bloc.login');
    }
    }
