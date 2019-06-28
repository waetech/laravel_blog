<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

    public function getIndex() {
        #process variable data or params
        #talk to the model
        #receive from the model
        #compile or process data from the model
        #pass that data to the correct view
        return view('pages.welcome');
        

    }

    public function getAbout() {
        return view('pages.about');

    }

    public function getContact() {

        return view('pages.contact');
    }

 
}

?>