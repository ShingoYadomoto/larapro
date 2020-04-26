<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
    public function index(){
        $todos = DB::table('todos')->get();
        return view('todo.index', ['todos' => $todos]);
    }
}
