<?php
namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(ContactRequest $request)
    {
        $message = ContactMessage::create($request->validated());

        // Send email notification
        Mail::to(config('mail.from.address'))
            ->send(new ContactFormMail($message));

        return redirect()->route('contact')
                         ->with('success', 'Thank you! We will get back to you shortly.');
    }
}