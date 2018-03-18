<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class NewsletterController extends Controller
{
 /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
 public function store(Request $request)
 {

   $this->validate( $request,  [
     'user_email' => 'required|max:255'
 ]);
 
  if ( ! Newsletter::isSubscribed($request->user_email) ) {

      $test =  Newsletter::subscribe($request->user_email);


       return back()->with('status', 'thanks for subscription !');

      }

      return back()->with('status', 'you are already subscribed !');

 }

}
