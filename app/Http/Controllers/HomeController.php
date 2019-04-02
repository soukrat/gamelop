<?php

namespace App\Http\Controllers;

use App\Code;
use Illuminate\Http\Request;
use Auth;
use App\Demande;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth::user()->is_admin){
            $code = Code::all();

            return view('page_admin.dashbord_admin', ['code' => $code]);
        }else{
            $demande = Demande::where('id_user', Auth::user()->id)->get();
            $code = Code::where('id_user', Auth::user()->id)->get();

            return view('page.dashbord',['demande' => $demande , 'code' => $code]);
        }

    }
}
