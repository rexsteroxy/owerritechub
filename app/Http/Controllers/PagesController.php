<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use App\studentRegister;

class PagesController extends Controller
{
    
    public function getHome(){ 

    	return view('index');
    }
    
    
    public function getRegistrationPage()
    {
        return view('register');
    }

    public function studentRegistration(Request $request)
    {
        $student = new studentRegister;
        $student->fullname = $request->input('fullname');
        $student->email = $request->input('email');
        $student->number = $request->input('number');
        $student->course = $request->input('course');
        $student->save();
        
        return redirect()->route('student-registration')->with('response','Registration Was Succesful! We will Get Back To You');
    }
    public function message(Request $request)
    {
        $contact = new contact;
        $contact->firstname = $request->input('firstname');
        $contact->lastname = $request->input('lastname');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
       

        return redirect()->route('index')->with('response','Thanks!. Your Message Have Been Recorded. We will get in touch.');
    }
    
    

    
}
