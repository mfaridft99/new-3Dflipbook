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
                            Hasil pencaharian untuk kata '<strong>{{request()->query('search_user')}}</strong>' tidak tersedia
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>            
                                        </svg>
                                    </a>
                                </div>
                            </div>
                    @endforeach
                </div>
                <br/>
                {{ $daftarbuku->links() }}
            </div>
        </div>
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
