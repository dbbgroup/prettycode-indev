<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Like;

class FormController extends Controller
{
    public function show($action) {
        switch ($action) {
            case "login":
                return view('forms.login');
                break;
            case "register":
                return view('forms.register');
                break;
            case "forgot-password":
                return view('forms.forgot-password');
                break;
            case "confirm":
                return view('forms.confirm');
                break;
            case "abuse":
                return view('forms.abuse');
                break;
            case "q/add":
                return view('forms.add-question');
                break;
            case "p/add":
                return view('forms.add-post');
                break;
            default:
                return view('forms.errors.404');
        }
    }

    public function abuse($publication_id) {


        Abuse::create();
    }

    public function add_question(Request $request) {


        Question::create();
    }

    public function add_post(Request $request) {

        Post::create();
    }

    public function add_comment(Comment $comment) {


        Comment::create();
    }

    public function add_like(Like $like) {


        Like::create();
    }
}
