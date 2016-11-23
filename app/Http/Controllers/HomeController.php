<?php

namespace azf\Http\Controllers;

use azf\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('/home');
    }
}
