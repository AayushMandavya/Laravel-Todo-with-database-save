<?php

namespace App\Http\Controllers;
use App\Models\TodoList;

use Illuminate\Http\Request;

class TodolistController extends Controller
{
    //
    public function saveTodo(Request $req)
    {
        $todoobj= new TodoList();   
        $todoobj->title ='test3';
        $todoobj->save();
        return view('welcome');       
    }
}
