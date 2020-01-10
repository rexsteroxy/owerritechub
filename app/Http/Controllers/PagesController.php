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
    
    

    
}
