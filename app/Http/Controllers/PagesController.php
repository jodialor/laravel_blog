<?php

namespace App\Http\Controllers;

use App\Post;

class PagesController extends Controller {

  public function getIndex(){
    //process variable data or params
    //talk to the model
    //recieve from the model
    //compile or process data from the model if needed
    //pass that data to the correct view

    $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
    return view('pages.welcome')->withPosts($posts);
  }

  public function getAbout(){
    $firstN = "Jorge";
    $lastN = "Ornelas";
    $fullN = $firstN." ".$lastN;
    $email = "diogornelas1@gmail.com";

    //return view('pages.about')->with("fullname", $fullN)->with("email", $email);
    //return view('pages.about')->withFullname($fullN)->withEmail($email);

    $data = [];
    $data['fullname'] = $fullN;
    $data['email'] = $email;

    return view('pages.about')->withData($data);
  }

  public function getContact(){
    return view('pages.contact');
  }



}
