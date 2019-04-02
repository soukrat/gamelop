<?php

namespace App\Http\Controllers;

use App\Starpass;
use Illuminate\Http\Request;
use Auth;
use App\User;

class StarpassController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function addnumber()
    {
        if (Auth::user()->is_admin) {
            return view('page_admin.add_number');
        }else{
            return view('errors.404');
        }
    }

    public  function cridite(){


        $starpass = Starpass::all();

        return view('page.apelle_tel',['starpass' => $starpass]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nu = new Starpass();

        $nu->nom_doc = $request->input('nom');
        $nu->identifiant = $request->input('identifiant');
        $nu->country = $request->input('country');
        $nu->flag = $request->get('result');
        $nu->numéro = $request->input('numero');
        $nu->description = $request->input('description');
        $nu->crédits = $request->input('credits');
        $nu->prix = $request->input('prix');

        $nu->save();

        session()->flash('success', 'numéro save successful !');

        return redirect('addnumber');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Starpass  $starpass
     * @return \Illuminate\Http\Response
     */
    public function show(Starpass $starpass)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Starpass  $starpass
     * @return \Illuminate\Http\Response
     */
    public function edit(Starpass $starpass)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Starpass  $starpass
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Starpass $starpass)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Starpass  $starpass
     * @return \Illuminate\Http\Response
     */
    public function destroy(Starpass $starpass)
    {
        //
    }
}
