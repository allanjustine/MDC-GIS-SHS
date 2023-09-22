<?php

namespace App\Http\Controllers\Normal_View;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class NormalContactUsController extends Controller
{
    public function contact()
    {
        return view('normal-view.pages.contact');
    }

    public function contactUsStore(Request $request)
    {
        $request->validate([
            'full_name'     =>      'required|max:255',
            'email'         =>      'required|email',
            'phone_number'  =>      'required|digits:11|numeric',
            'address'       =>      'required',
            'message'       =>      'required'
        ]);

        Contact::create([
            'full_name'         =>      $request->input('full_name'),
            'email'             =>      $request->input('email'),
            'phone_number'      =>      $request->input('phone_number'),
            'address'           =>      $request->input('address'),
            'message'           =>      $request->input('message')
        ]);

        return redirect('/contact-us')->with('message', 'Submitted Successfully');
    }
}
