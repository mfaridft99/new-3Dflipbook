<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<style type="text/css">
    .left{text-align:left;}
    .center{text-align:center;}
    .right{text-align:right;}
    .justify{text-align:justify;}
</style>

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-2">
                @forelse($daftarbuku as $df)
                @empty
                <div class="mt-8 text-2xl">
                    <p class="center">
                        Hasil pencaharian untuk kata '<strong>{{request()->query('search')}}</strong>' tidak tersedia
                    <p>
                </div>
                <div class="mt-6 text-gray-500">
                    <p class="center">Silahkan menggunakan kata kunci lain untuk mencari dokumen.<p>
                </div>
                @endforelse

                @if (session('success_hapus'))
                    <h6 class="alert alert-success alert-dismissible"><strong>{{ session('success_hapus') }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </h6>
                @endif

                <div class="row">
                    @foreach($daftarbuku as $df)
                            <div class="card m-2" style="width: 14rem;">
                            <img src="{{url ('Storage/image/'.$df->gambar)}}" class="card-img-top" style="width: 13.5rem; height:13,5rem;" alt="">
                            <div class="card-body">
                                <h5 class="card-title"><strong>{{$df->judul}}</strong></h5>
                                <p class="card-text">{{$df->keterangan}}</p>
                                <br/>
                                <a href="/flipbook/{{ $df->id }}" class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-search"></span>View
                                </a>
                                <a href="/edit/{{ $df->id }}" class="btn btn-primary btn-sm">
                                <span class="glyphicon glyphicon-pencil"></span>Edit</a>
                                <a href="/hapus/{{ $df->id }}" class="btn btn-danger btn-sm">
                                <span class="glyphicon glyphicon-trash"></span>Hapus</a>
                            </div>
                            </div>
                    @endforeach
                </div>
            </div>
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
</x-app-layout>
