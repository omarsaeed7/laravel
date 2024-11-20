<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MainController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function resume()
    {
        return view('resume');
    }
    public function projects()
    {
        return view('projects');
    }
    public function contact()
    {
        return view('contact');
    }
    public function contactUs(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'message' => ['required']
        ]);
        $data = $request->except('_token');
        Mail::to('admin@admin.com')->send(new ContactMail($data));
        return redirect(route('main.index'));
    }
}
