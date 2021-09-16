<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">
              <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                  <b>{{ __('Edit PDF') }}</b>
              <br/>
              </h2>
              @if(count($errors) > 0)
                <div class="alert alert-danger alert-dismissible">
                  <strong>Maaf!</strong> Data PDF atau gambar tidak sesuai format.
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              @endif
              
              @foreach($daftarbuku as $df)
				        <form action="/edit/proses/{{ $df->id }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                  @method('PUT')

                  <div class="form-group">
						        <b>Judul Dokumen</b>
                    <input type="text" class="form-control" name="judul" value="{{ $df->judul }}">
					        </div>

                  <div class="form-group">
					          <b>Keterangan</b>
					          <textarea class="form-control" name="keterangan">{{ $df->keterangan }}</textarea>
					        </div>

                  <div class="form-group">
                    <b>Dokumen PDF</b><br/>
					          <input type="file"  name="file" value="{{ $df->file }}">
                  </div>

                  <div class="form-group">
                    <br/>
                    <b>Gambar Sampul (PNG, JPG, atau JPEG)</b><br/>
						        <input type="file" name="gambar" value="{{ $df->gambar }}">
                  </div>
                  <br/>
					        <input type="submit" value="Ubah" class="btn btn-primary">
				        </form>
              @endforeach
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