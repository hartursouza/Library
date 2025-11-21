<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessage;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(ContactRequest $request)
    {
        Mail::to(config('mail.to.address'))->queue(
            new ContactMessage($request->validated())
        );

        Log::info('Formulário enviado.', ['email' => $request->email]);

        return back()->with('success', 'Mensagem enviada!');
    }
}
