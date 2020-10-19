<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // grazie al model effettuo la query
        $data = Client::all();   // prende tutti i campi
        return view('index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if(empty($data['name']) || empty($data['lastname']) || empty($data['eta'])) {
            return back()->withInput();
        }
        $clientNew = new Client;
        $clientNew->nome = $data['name'];
        $clientNew->cognome = $data['lastname'];
        $clientNew->eta = $data['eta'];
        $saved = $clientNew->save();
        if($saved){
          return redirect()->route('clients.index');
        }
        // dd($saved);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function show(Client $client)
     {
         return view('show', compact('client'));
     }

     // Oppure possiamo usare questa funzione show

    // public function show($id)
    // {
    //     $client = Client::find($id);
    //     return view('show', compact('client'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        return view('create', compact('client'));
    }

    // public function edit($id)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $data = $request->all();
        // inserire validate
        $client->update($data);
        return view('show', compact('client'));
    }

    // public function update(Request $request, $id)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }

    // public function destroy($id)
    // {
    //     //
    // }
}
