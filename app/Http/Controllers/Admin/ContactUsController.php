<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function message()
    {
        $count = Contact::count();
        $messages = Contact::orderBy('id', 'asc')->paginate(10);

        return view('admin.pages.messages', compact('messages', 'count'));
    }
}
