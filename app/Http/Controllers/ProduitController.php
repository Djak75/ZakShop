<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        //dd($produits);
        return view('admin.index', compact ('produits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $produits = Produit::all();
        return view('admin.create', compact( 'produits'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'nom' => 'required'|'string'|'max:255',
            'description' => 'required'|'text'|'null',
            'prix' => 'required'|'numeric',
            'image' => 'required'|'string'|'null',
            'categorie_id' => 'required'
        ]);
            
        return view('admin.store' );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return view('admin.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
