<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <title>Baca PDF</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">Menu</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/upload">Upload</a>
        </li>
      </ul>
      <form class="d-flex" action="/search" method="GET" role="search">
        <input class="form-control me-2"  type="text" name="search" placeholder="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row">
        <h1 class="text-center my-3">Ayo Baca Buku!</h1>
        <h5 class="text-center">Bacalah buku agar pengetahuanmu bertambah luas</h5>
    </div>
</div>

<div class="container" style="width= 100%">

  @if (session('success_hapus'))
    <h6 class="alert alert-success alert-dismissible"><strong>{{ session('success_hapus') }}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </h6>
  @endif
  
  <div class="row my-3">
    <h4 >Daftar Buku</h4>
  </div>
    <div class="row">
      @foreach($daftarbuku as $df)
        <div class="card" style="width: 15rem;">
          <img src="{{url ('Storage/image/'.$df->gambar)}}" class="card-img-top" style="width: 13.5rem; height:13,5rem;" alt="">
          <div class="card-body">
            <h5 class="card-title">{{$df->judul}}</h5>
            <p class="card-text">{{$df->keterangan}}</p>
            <a href="/flipbook/{{ $df->id }}" class="btn btn-primary btn-sm">View</a>
            <a href="/edit/{{ $df->id }}" class="btn btn-primary btn-sm">Edit</a>
            <a href="/hapus/{{ $df->id }}" class="btn btn-danger btn-sm">Hapus</a>
          </div>
        </div>
      @endforeach
    </div>
    <br/>
    {{ $daftarbuku->links() }}
</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>