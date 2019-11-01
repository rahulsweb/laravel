<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUs;
use App\Mail\ContactUser;
use Mail;
class ContactUsController extends Controller
{
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
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
   public function contactSaveData(Request $request)
   {

       $this->validate($request, [
        'name' => 'required',
        'subject' => 'required',
        'contact' => 'required|numeric|digits:10',
        'email' => 'required|email',
        'message' => 'required'
        ]);
      $contact=ContactUS::create($request->all()); 
//     \Mail::send('emails.contactus',
//        array(
//            'name' => $request->get('name'),
//            'email' => $request->get('email'),
//            'subject' => $request->get('subject'),
//            'contact' => $request->get('contact'),
//            'user_message' => $request->get('message')
//        ), function($message) use ($request)
//    {
//       $message->from('onlineinterviewquestions@gmail.com');
//       $message->to('sharadjaiswal1411@gmail.com', 'Admin')->subject($request->get('subject'));
//    });

Mail::to($contact->email)->send(new ContactUser($contact,$request->ip()));
    return back()->with('success', 'Thanks for contacting us!'); 
   }
}