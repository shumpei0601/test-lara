<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class TodoController extends Controller
{
    public function index()
    {
        $items = Author::all();
        return view('index', ['items' => $items]);
    }
}
