<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        //$publications = Post::where('is_active', true)->get()->all();

        //$recommended = $this->getRecommended();

    return view('index', /*compact($publications)*/);
    }

    public function show(Page $page) {
        $items = [];

        switch ($items['type']) {
            case Page::PAGE_TYPE_POST:
                return view('post');
                break;
            case Page::PAGE_TYPE_QUESTION:
                return view('question');
                break;
            case Page::PAGE_TYPE_FORM:
                return view('form');
                break;
            case Page::PAGE_TYPE_PLAIN:
                return view('page');
                break;
        }
    }

    private function getRecommended() {

    }
}
