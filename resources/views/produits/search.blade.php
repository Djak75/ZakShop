@extends('layout.layout')

@section('pageTitle', 'Résultats de recherche')

@section('content')
    <h2>Résultats pour "{{ $motCle }}"</h2>

    <div class="row mt-4">
        @forelse ($produits as $produit)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $produit->image }}" class="card-img-top p-3" alt="{{ $produit->nom }}" style="object-fit: contain; height: 250px;">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $produit->nom }}</h5>
                        <p class="card-text">{{ number_format($produit->prix, 2) }} €</p>
                        <a href="{{ route('produits.show', $produit->id) }}" class="btn btn-primary">Voir le produit</a>
                    </div>
                </div>
            </div>
        @empty
            <p>Aucun produit trouvé.</p>
        @endforelse
    </div>
@endsection
