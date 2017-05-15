<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    //


    function index() {
        $data = [
            'form' => View('form'),
        ];

        return view('homepage', $data);
    }
}
