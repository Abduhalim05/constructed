<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Service;
use App\Models\Contact;
use App\Models\Message;
use App\Models\Project;
use App\Models\User;

class PageController extends Controller
{
    public function index(){
        $services_2=Service::limit(2)->get();
        $services_3=Service::limit(3)->latest()->get();

        $projects=Project::limit(7)->get();

        $abouts=About::limit(3)->get();

        $contacts=Contact::limit(1)->first();

        $messages=Message::where('status', 1)->get();

        return view('home', compact('services_2','services_3','projects', 'abouts','contacts','messages'));
    }
    public function contact(Request $request){
        if ($request->isMethod('GET')) {
            return back();
        }else{
                Message::create($request->all());
                return redirect()->route('home');
         }
    }

}
