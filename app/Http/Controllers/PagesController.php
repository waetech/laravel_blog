<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

    public function getIndex() {
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->with('posts', $posts);
    }

    public function getAbout() {
        $first = 'Alex';
        $last = 'Curtis';

        $fullname = $first . " " . $last;
        $email = 'alex@jcurtis.com';
        $data = [];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->with("data", $data);

    }

    public function getContact() {

        return view('pages.contact');
    }

 
}

?>