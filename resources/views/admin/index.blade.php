@extends('layout.layout')

@section('pageTitle', 'Liste des Produits')

@section('content')
    <h1 class="mt-4">Bienvenue sur Zak Shop</h1><br>
    <h2 class="mb-4">Les derniers produits</h2>

    <div class="d-flex justify-content-end mb-4">
        <a href="{{ route('produits.create') }}" class="btn btn-success">➕ Ajouter au panier</a>
    </div>

    <div class="row">
        @foreach ($produits->take(12) as $produit)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $produit->image }}" class="card-img-top img-fluid p-3" alt="{{ $produit->nom }}" style="object-fit: contain; height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $produit->nom }}</h5>
                        <p class="card-text">{{ number_format($produit->prix, 2) }} €</p>
                        <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-primary">Voir le produit</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

                    
            