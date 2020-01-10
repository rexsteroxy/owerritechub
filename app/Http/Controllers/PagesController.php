<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    
    public function getHome(){ 

    	return view('index');
    }
    
    public function getContactPage()
    {
        return view('contact');
    }
    public function getRegistrationPage()
    {
        return view('register');
    }

    public function studentRegistration()
    {
        return redirect()->route('student-registration')->with('response','Registration Was Succesful! We will Get Back To You');
    }
    public function message()
    {
        return redirect()->route('index')->with('response','Thanks!. Your Message Have Been Recorded. We will get in touch.');
    }
    
    

    
}
