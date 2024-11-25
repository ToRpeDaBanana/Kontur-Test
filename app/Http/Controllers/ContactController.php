<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactFormMail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{   
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|regex:/^\+?\d{10,15}$/',
            'email' => 'required|email|max:255',
        ]);

        try {
            $contact = Contact::create($validatedData);

            Mail::to('admin@example.com')->send(new ContactFormMail($contact));

            return response()->json(['success' => 'Данные успешно отправлены!']);
        } catch (\Exception $e) {
            \Log::error('Ошибка при создании контакта: ' . $e->getMessage());
            return response()->json(['error' => 'Произошла ошибка на сервере.'], 500);
        }
    }

}
