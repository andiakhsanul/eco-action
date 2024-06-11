<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: white
        }

        h1 {
            text-align: center;
        }

        img {
            display: block;
            margin: 0 auto;
            max-width: 100%;
            height: auto;
        }

        p {
            text-align: justify;
        }

        div {
            margin-bottom: 20px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="background-color: #FBF1DD; ">
    <div class="container">
        <div>
            <h1> {{ $articles->title }}</h1>
        </div>
        <div>
            <img src="{{ asset('storage/' . $articles->image) }}" alt="">
        </div>
        <div>
            {{ $articles->description }}
        </div>
        </div>
        <div class="d-flex justify-content-center">

            <a class="btn btn-danger" href="{{ route('article.form', $articles->id) }}">Join Volunteer Now!</a>
        </div>
    </div>
</body>

</html>