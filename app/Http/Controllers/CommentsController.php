<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments as Comment;
class CommentsController extends Controller
{
    //


    function index() {
        $data = [];
        return view('homepage', $data);
    }

    function add( Request $request ) {

        try 
        {
            $comment = new Comment;
            $comment->name = $request->name;
            $comment->email = $request->email;
            $comment->comment = $request->comment;
            $comment->save();
            $request->session()->flash('class', 'success');
            $request->session()->flash('status', "Thank you {$comment->name}, your comment was added successfully!");
        }
        catch( Exception $e )
        {
            $request->session()->flash('class', 'danger');
            $request->session()->flash('status', "Error Occurred {$e->message}!");
        }
        
        return redirect('/');
    }
}
