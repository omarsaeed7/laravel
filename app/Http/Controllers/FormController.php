<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Rules\CheckWordCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }
    public function form1Data(Request $request)
    {
        $request->validate(
            [
                'email' => 'required',
                'password' => 'required|min:8|confirmed',
                'birth' => 'required|before:today',
                'gender' => 'required',
                'level' => 'required',
                'hobbies' => 'required',
                'bio' => ['required', new CheckWordCount(4)] // call the custom validate rule
            ], // massege handle
            [
                'email.required' => 'Email Required',
                'password.required' => 'Enter Password dude'
            ]
        );
        return dd($request->all());
    }
    // -----------------------

    public function form4()
    {
        return view('forms.form4');
    }
    public function form4Data(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'image' => 'required | image | mimes:png,jpg,jpeg | max: 10000',
            'images' => 'required'
        ]);
        // $imgName = rand() . "_" . time() . "_" . $request->file('image')->getClientOriginalName();

        foreach ($request->images as $img) {
            $exts = $img->getClientOriginalExtension();
            $imgsName = rand() . rand() . '_' . rand() . rand() . rand() . '.' . $exts;
            $img->move(public_path('images'), $imgsName);
        }
        $ext = $request->file('image')->getClientOriginalExtension();
        $imgName = rand() . rand() . '_' . rand() . rand() . rand() . '.' . $ext;
        $request->file('image')->move(public_path(), $imgName);
    }

    public function contactme()
    {
        return view('forms.contactme');
    }

    public function contactmeData(Request $request)
    {
        include_once('/home/kf/Learning/web/backend/laravel/mohamed-nagi/app/Http/Controllers/arrayTools.php');
        $request->validate([
            'email' => 'required',
            'subject' => 'required',
            'images' => 'nullable|image|mimes:png,jpg,jpeg',
            'mssg' => ['required', new CheckWordCount(5)]
        ]);
        $data = $request->except('_token', 'images');
        if ($request->file('images') != null) {
            $ext = $request->file('images')->getClientOriginalExtension();
            $imgName = rand() . rand() . '_' . rand() . rand() . rand() . '.' . $ext;
            $request->file('images')->move(public_path('images'), $imgName);
            $data['images'] = $imgName;
        }

        Mail::to('admin@admin.com')->send(new ContactMail($data));
        // dd($request->all());
    }
    //
}
