<?php

namespace App\Http\Controllers;
use App\Models\TodoList;

use Illuminate\Http\Request;

class TodolistController extends Controller
{
    public function index()
    {
        return view('welcome',['items'=>TodoList::all()]);
    }
    public function saveTodo(Request $req)
    {
        $todoobj= new TodoList();   
        $todoobj->title =$req->todo;
        $todoobj->save();
        return redirect("/");     
    }
}
