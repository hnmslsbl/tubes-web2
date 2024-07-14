<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $product->Merek }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style3.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow navbar-rounded-bottom">
        <div class="container-fluid">
            <h1 class="navbar-brand mx-5">Promotion</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mx-5">
                    <div class="d-flex mx-5">
                        <div class="mx-5">
                            <img class="nav-link btn active" aria-current="page" src="{{ asset('icon/homeungu.png') }}" alt="Home"></img>
                        </div>
                        <div>
                            <img class="nav-link btn" src="{{ asset('icon/ppungu.png') }}" alt="Profile"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- container1 -->
    <div class="container my-4">
        <img src="{{ asset('storage/images/products/' . $product->Foto) }}" class="rounded mx-auto d-block img-fluid" alt="...">
        <h5 class="text-center fw-bolder mt-3">{{ $product->Merek }} - {{ $product->Processor }}</h5>
    </div>
</body>
</html>
