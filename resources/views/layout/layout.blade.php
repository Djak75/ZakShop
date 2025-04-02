<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('pageTitle')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">

        <!-- Menu des catégories -->
        <nav class="navbar navbar-expand-lg navbar-light bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="{{ route('produits.index') }}">ZakShop</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <!-- Menu -->
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('produits.index') }}">Accueil</a></li>
                @foreach ($categories as $categorie)
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('categories.show', $categorie->id) }}">{{ $categorie->nom }}</a>
                </li>
                @endforeach
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('contact') }}">Contact</a></li>
            </ul>

            <!-- Recherche -->
            <form class="d-flex" action="{{ route('produits.search') }}" method="GET">
                <input class="form-control me-2" type="search" name="q" placeholder="Rechercher un produit" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Rechercher</button>
            </form>
            </div>
        </div>
        </nav>


        @yield('content')

    </div>
</body>
</html>