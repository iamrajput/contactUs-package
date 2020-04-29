<?php
namespace atulPackage\contactForm\Http\Controllers;

use App\Http\Controllers\Controller;
use atulPackage\contactForm\Mail\ContactMailable;
use atulPackage\contactForm\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function index()
    {
        return view('contact/contactForm');
    }

    public function sendMail(Request $request)
    {
        Mail::to(config('contactForm.send_email_to'))
            ->send(new ContactMailable($request->message,$request->name));
        Contact::create($request->all());
        return redirect(route('contact'))->with(['message' => 'Thank you, your mail has been sent successfully.']);
    }

}
