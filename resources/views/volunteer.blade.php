<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #4E8A67;
        }

        .article-card {
            background-color: #FBF1DD;
            border-radius: 15px;
            margin-bottom: 20px;
        }

        .article-card img {
            border-radius: 15px;
        }

        .article-card .article-content {
            margin-left: 20px;
        }
    </style>
</head>

<body id="deforestation">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">EcoAction</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="javascript:void(0);" onclick="goBack()">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @foreach($articles as $article)
        <div class="row article-card shadow-sm p-3">
            <div class="col-md-6">
                <img src="{{ asset('storage/' . $article->image) }}" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 article-content">
                <h1>{{ $article->title }}</h1>
                <p>{{ $article->description }}</p>
                <p><strong>Volunteers:</strong> {{ $article->volunteers->count() }}</p>
                <a class="btn btn-primary" href="{{ route('article.detail', $article->id) }}">Take Actions ></a>
            </div>
        </div>
        @endforeach
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
</body>

</html>
