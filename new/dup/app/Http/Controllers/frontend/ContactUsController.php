<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\frontend\ContactRequest;
use App\ContactUs;
use App\Mail\ContactUser;
use Mail;
class ContactUsController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * Contact us details related to users are storing data ,display on index page on admin panel
    */
   public function contactUS()
   {
       return view('contact-us');
   }
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactSaveData(ContactRequest $request)
   {

      $contact=ContactUS::create($request->all()); 

      Mail::to($contact->email)->send(new ContactUser($contact,$request->ip()));
    return back()->with('success', 'Thanks for contacting us!'); 
   }
}