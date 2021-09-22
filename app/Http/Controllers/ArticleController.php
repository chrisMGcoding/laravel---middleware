<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct() {
        $this -> middleware('isConnected');
    }

    public function index() {
        return view('pages.article');
    }
}
