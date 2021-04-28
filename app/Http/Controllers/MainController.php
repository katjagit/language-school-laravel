<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use Illuminate\Http\Request;
use Validator;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function courses(){
        $courses = new Course();
        return view('courses', ['courses' => $courses->all()]);
    }

    public function contact(){
        return view('contact');
    }

    public function contact_check(Request $request){
        $valid = $request->validate([
            'first_name' => 'required|min:3|max:100',
            'last_name' => 'required|min:3|max:100',
            'email' => 'email',
            'status' => 'required',
            'subject' => 'required',
            'message' => 'required',
            'agb' => 'required'
        ]);

        $review = new Contact();
        $review->firstname = $request->input('first_name');
        $review->lastname = $request->input('last_name');
        $review->email = $request->input('email');
        $review->status = $request->input('status');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('contact');
    }
}
