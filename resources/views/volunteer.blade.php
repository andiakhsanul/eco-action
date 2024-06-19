<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body style="background-color: #4E8A67;" id="deforestation">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
            <a class="navbar-brand text-white mr-auto" href="#">EcoAction</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void(0);" onclick="goBack()">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @foreach($articles as $article)
    <div class="container d-flex p-3 m-4 w-100 rounded-5 shadow-sm" style="background-color: #FBF1DD;">
        <div class="row col-md-6">
            <img src="{{ asset('storage/' . $article->image) }}" class="rounded-5" alt="">
        </div>
        <div style="margin-left: 20px;">
            <h1>{{ $article->title }}</h1>
            <p>{{ substr($article->description, 0, 100) }}{{ strlen($article->description) > 100 ? "..." : "" }}</p>
            <p><strong>Volunteers:</strong> {{ $article->volunteers->count() }}</p>
            <a class="btn btn-primary d-flex align-items-end" href="{{ route('article.detail', $article->id) }}">Take Actions ></a>
        </div>
    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/js/index.js') }}"></script>
</body>

</html>
<script>
    function goBack() {
        window.history.back();
    }
</script>
