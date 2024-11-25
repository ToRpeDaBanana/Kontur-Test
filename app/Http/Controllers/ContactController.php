<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ContactController;

class ContactController extends Controller
{   
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'phone' => 'required|string|max:15',
        'email' => 'required|email|max:255',
    ]);

    \Log::info('Validated Data: ', $validatedData);

    $contact = Contact::create($validatedData);

    // Отправка email администратору
    Mail::to('kudashev.n21gmail.com')->send(new ContactFormMail($contact));

    return response()->json(['success' => 'Данные успешно отправлены!']);
}
}
