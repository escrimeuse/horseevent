<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
        $first = "Cathryn";
        $last = "Griffiths";
        return view('pages.about', compact('first','last'));
    }

    public function home(){
        return view('base');
    }

    public function yourhorses(){
        return view('yourhorses');
    }

    public function yourupcomingevents(){
        return view('yourupcomingevents');
    }

    public function yourinfo(){
        return view('yourinfo');
    }

    public function yourpastevents(){
        return view('yourpastevents');
    }

    public function eventpage(){
        return view('event');
    }

    public function createevent(){
        return view('createevent');
    }

    public function showrecord(){
        return view('yourshowrecord');
    }


}
