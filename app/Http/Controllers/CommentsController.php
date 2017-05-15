<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //


    function index() {
        $data = [];
        return view('homepage', $data);
    }

    function add( Request $request ) {

        $request->session()->flash('status', 'Comment was added successfully!');

        

        return redirect('/');
    }
}
