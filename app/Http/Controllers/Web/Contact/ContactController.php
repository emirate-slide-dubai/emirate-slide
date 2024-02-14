<?php

namespace App\Http\Controllers\Web\Contact;

use App\Http\Controllers\Controller;
use App\Mail\ContactUs as MailContactUs;
use App\Models\Contactus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(){
        return view('web.contact.contact');
        }
        
        
        public function store(Request $request){
            // return $request;
            $contact= new Contactus();
            $contact->name          =   $request->name;
            $contact->email         =   $request->email;
            $contact->category_name =   $request->category_name;
            $contact->phone         =   $request->phone;
            $contact->subject       =   $request->subject;
            $contact->message       =   $request->message;
            $contact->save();
            
            Mail::to('info@emirateslide.com')->send(new MailContactUs($contact));

            return redirect()->back()->with('success','Your request has been submitted successfully.');
        }
    
        public function faqs(){
            return view('web.faqs.index');
        }

    }
