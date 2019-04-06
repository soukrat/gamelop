<?php

namespace App\Http\Controllers;

use App\Store;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Auth;
use App\user;
use App\Code;
use App\Starpass;

class StoreController extends Controller
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
        $store = Store::all();

        return view('page.store', ['store' => $store]);
    }

    public  function addstore(){

        if (Auth::user()->is_admin) {
            return view('page_admin.add_store');
        }else{
            return view('errors.404');
        }
    }

    public  function parametre(){

        return view('page.demande');
    }

    public function valider(Request $request){

        $ids='';
        $idp = 237600;
        $idd = $request->input('idd');
        $ident = $idp.";".$ids.";".$idd;
        $nombre= $request->input('nombre');

        $crédits = $request->input('cridite');
        $nomdoc = $request->input('nomdoc');
        $numéro = $request->input('numéro');

        $xml=@file("http://script.starpass.fr/check_php.php?ident=".$ident."&codes=".$nombre)
                                    or die("Error: Cannot create object");

        $tab = explode("|",$xml[0]);
        //print_r($tab);
        //if eroor
        if ($tab[0] == 'OUI') {

            $id= auth::user()->id;
            $lb = User::find($id);
            $lb->lob = $request->input('cridite') + $lb->lob;
            $lb->save();

            $code= new Code();
            $code->id_user = auth::user()->id;
            $code->nom = auth::user()->nom;
            $code->prenom = auth::user()->prenom;
            $code->tel = auth::user()->tel;
            $code->nom_doc = $nomdoc;
            $code->crédits = $crédits;
            $code->numéro = $numéro;
            $code->code = $nombre;
            $code->save();

            session()->flash('validecode', 'votre code est réussi !');

            return redirect('cridite');
        }else{
            session()->flash('invalidevalidecode', 'votre code n\'est pas réussi !');
            return redirect('cridite');
        }

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

        $cv = new Store();

        $cv->nom_produit = $request->input('nom');
        $cv->description = $request->input('description');

        $cv->cridite = $request->input('cridite');

        if($request->hasFile('photo')) {
            $cv->image = $request->photo->store('image');
        }

        $cv->save();

        session()->flash('success', 'store save successful !');

        return view('page_admin.add_store');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function edit(Store $store)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Store $store)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Store  $store
     * @return \Illuminate\Http\Response
     */
    public function destroy(Store $store)
    {
        //
    }
}
