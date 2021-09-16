<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-3">

            @if(count($errors) > 0)
              <div class="alert alert-danger alert-dismissible">
                <strong>Maaf!</strong> Form yang anda kirim tidak sesuai atau tidak terisi.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
	            </div>
            @endif

              <form action="/upload/proses" method="post" enctype="multipart/form-data">
					      {{ csrf_field() }}
					
                <div class="form-group">
						      <b>Judul Dokumen</b> 
                  <b class="text-danger">*</b>
                  <input type="text" class="form-control" name="judul">
					      </div>

                <div class="form-group">
						      <b>Keterangan</b>
                  <b class="text-danger">*</b>
						      <textarea class="form-control" name="keterangan"></textarea>
					      </div>

                <div class="form-group">
						      <b>Dokumen PDF</b>
                  <b class="text-danger">*</b><br/>
						      <input type="file" name="file">
                  <br/>
                  <br/>
                  <b>Gambar Sampul (PNG, JPG, atau JPEG)</b>
                  <b class="text-danger">*</b>
                  <br/>
						      <input type="file" name="gambar">
                </div>
                <br/>
					      <input type="submit" value="Unggah" class="btn btn-primary">
				      </form>
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