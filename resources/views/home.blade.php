<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I miei film su Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <header class="bg-danger text-white py-4 mb-5">
        <div class="container">
            <h1 class="m-0">I miei film su Laravel</h1>
        </div>
    </header>

    <main class="container pb-5">
        <div class="row g-4">
            @foreach ( $movies as $movie )
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title">{{$movie["title"]}}</h5>
                            <p class="text-secondary fst-italic">{{$movie["original_title"]}}</p>
                            <p class="text-secondary">{{$movie["nationality"]}}</p>
                            <p class="text-secondary mb-0">{{$movie["date"]}}</p>
                        </div>
                        <div class="card-footer bg-danger bg-opacity-10 text-danger">
                           {{ $movie["vote"] }} stars
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

</body>
</html>
