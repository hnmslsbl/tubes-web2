<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow navbar-rounded-bottom">
        <div class="container-fluid">
            <h1 class="navbar-brand mx-5">Promotion</h1>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse ms-auto" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto mx-5">
                    <div class="d-flex mx-5">
                        <div class="mx-5">
                            <img class="nav-link btn active" src="icon/home.png">
                        </div>
                        <div>
                            <img class="nav-link btn" src="icon/pp.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- container 1-1 -->
    <div class="mt-5 py-4">
        <div class="container-xl">
            <h3 class="text-center">Kategori Pengguna</h3>
            <h5>Pengguna Harian</h5>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($product as $item)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/images/products/'.$item->Foto) }}" class="card-img-top" alt="{{ $item->Merek }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->Merek }}</h5>
                            <p class="card-text">{{ $item->Deskripsi }}</p>
                            <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><br>
            <h5>Pengguna Kantoran</h5>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($product2 as $item)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/images/products/'.$item->Foto) }}" class="card-img-top" alt="{{ $item->Merek }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->Merek }}</h5>
                            <p class="card-text">{{ $item->Deskripsi }}</p>
                            <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><br>
            <h5>Desain Grafis</h5>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($product3 as $item)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/images/products/'.$item->Foto) }}" class="card-img-top" alt="{{ $item->Merek }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->Merek }}</h5>
                            <p class="card-text">{{ $item->Deskripsi }}</p>
                            <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><br>
            <h5>Gaming</h5>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($product4 as $item)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/images/products/'.$item->Foto) }}" class="card-img-top" alt="{{ $item->Merek }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->Merek }}</h5>
                            <p class="card-text">{{ $item->Deskripsi }}</p>
                            <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><br>
            <h5>Programming</h5>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($product5 as $item)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/images/products/'.$item->Foto) }}" class="card-img-top" alt="{{ $item->Merek }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->Merek }}</h5>
                            <p class="card-text">{{ $item->Deskripsi }}</p>
                            <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div><br>
            <h5>Profesional</h5>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach($product6 as $item)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ asset('storage/images/products/'.$item->Foto) }}" class="card-img-top" alt="{{ $item->Merek }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->Merek }}</h5>
                            <p class="card-text">{{ $item->Deskripsi }}</p>
                            <a href="{{ route('product.show', $item->id) }}" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</body>
</html>
