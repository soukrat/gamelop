<?php

namespace App\Http\Controllers;

use App\Demande;
use Illuminate\Http\Request;
use Auth;
use Hash;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $demandadmin = Demande::all();

        return view('page_admin.gestion_demande', ['demandadmin' => $demandadmin]);
    }

    public function convert(Request $request)
    {
        $lob=Auth::user()->lob;
        $value=$request->input('value');
        $prix=Auth::user()->prix;

        if (($lob<$value) || ($value<100)){
            return redirect('parametre')->with('invalide', 'votre crédit entrer plue grand ou plus petite que 100 !');
        }else{
            $total=$lob-$value;
            $newprix=$value /100 + $prix;

            $list=Auth::user();
            $list->lob=$total;
            $list->prix=$newprix;

            $list->save();

            return redirect('parametre')->with('valide', 'Votre crédit a été bien converter');
        }

    }

    public function demande(Request $request)
    {
        $cin=$request->input("cin");
        $solde=$request->input("solde");
        $password=$request->input("password");

        if (($cin != "") && ($solde <= Auth::user()->prix) && ($solde >= 50) && (Hash::check($password, Auth::user()->password)))
        {
            $demande= new Demande();
            $demande->id_user = auth::user()->id;
            $demande->nom = auth::user()->nom;
            $demande->prenom = auth::user()->prenom;
            $demande->tel = auth::user()->tel;
            $demande->cin = $cin;

            if ($solde >=50 && $solde < 100 )
            {
                $demande->prix = $solde - 10;
            } elseif ($solde >= 100 && $solde <= 200)
            {
                $demande->prix = $solde - 15;
            }else
            {
                $demande->prix = $solde - 20;
            }


            $demande->date_demande = date('Y-m-d H:i:s');

            $demande->save();

            $list=Auth::user();
            $list->prix=$list->prix - $solde;

            $list->save();
            return redirect('parametre')->with('validedemande', 'votre Demande a été créer');
        }else{
            return redirect('parametre')->with('invalidedemande', 'quelque chose n\'est pas correct, veuillez vérifier s\'il vous plaît !');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(Demande $demande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(Demande $demande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $demande = Demande::find($id);

        $demande->code_payment = $request->input('codepayment');
        $demande->cin = $request->input('cin');
        $demande->date_retrait = date('Y-m-d H:i:s');
        $demande->status = 'Traiter';

        $demande->save();
        return redirect('demande')->with('status', 'Mise à jour réussie !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demande $demande)
    {
        //
    }
}
