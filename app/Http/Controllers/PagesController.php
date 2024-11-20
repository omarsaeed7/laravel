<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        return 'index page';
    }

    public function about() {
        return 'about page';
    }

    public function team() {
        return 'team page';
    }

    public function services() {
        return 'services page';
    }

    public function blog() {
        return 'blog page';
    }
    public function articles() {
        return 'articles page';
    }
}
