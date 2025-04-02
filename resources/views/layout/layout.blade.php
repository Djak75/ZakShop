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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ route('produits.index') }}">Zak Shop</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        @foreach ($categories as $categorie)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('categories.show', $categorie->id) }}">{{ $categorie->nom }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </nav>


        @yield('content')

    </div>
</body>
</html>