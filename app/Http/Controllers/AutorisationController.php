<?php

namespace App\Http\Controllers;

use App\Autorisation;
use Illuminate\Http\Request;

class AutorisationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = Autorisation::where('id_autorisation',1)->get()->first();

        return view('page_admin.setting', ['list' => $list]);
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
     * @param  \App\Autorisation  $autorisation
     * @return \Illuminate\Http\Response
     */
    public function show(Autorisation $autorisation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Autorisation  $autorisation
     * @return \Illuminate\Http\Response
     */
    public function edit(Autorisation $autorisation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Autorisation  $autorisation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $list = Autorisation::find($id);

        $list->login = $request->input('Login');
        $list->inscription = $request->input('inscription');
        $list->forget = $request->input('forget');


        $list->save();
        return redirect('autorisation')->with('status', 'Mise à jour réussie !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Autorisation  $autorisation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Autorisation $autorisation)
    {
        //
    }
}
