<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contacts = Contact::all();
        return view("contact" , compact("contacts"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
//   Validate form data

  request()->validate([
    'name' => 'required|string',
    'email' => 'required|email',
    'phone' => 'required|string', // Add phone field validation if needed
    'message' => 'required|string',
    
]);

  $contact = Contact::create([
    'name' => request('name'),
    'email' => request('email'),
    'phone' => request('phone'),
   'message' => request('message'),
  ]);


  // Get the email data from the form


  // Process and send the email
  $data = [
    'name' => $request->name,
    'email' => $request->email,
    'phone' => $request->phone, // Include phone data if validated
    'message' => $request->message,
  ];

  Mail::to('hello@exapmle.com')->send(new ContactMail($data));

  // Optional: Flash a success message to the user
  return back()->with('success', 'Your message has been sent!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
