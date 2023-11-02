<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact_us');
    }

    public function store(ContactRequest $request)
    {
        Contact::query()->create([
           'name' => $request->name ,
           'email' => $request->email ,
           'description' => $request->description ,
        ]);

        return redirect()->route('contact')->with('success', 'پیام شما با موفقیت ارسال شد.');
    }

    public function show($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
