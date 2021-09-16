<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <meta charset="utf-8">
    <title>Baca PDF</title>
    <style type="text/css">
          body {
              margin: 15px;
              padding: 15px;
          }
          .solid-container {
            height: 80vh;
          }
        </style>
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
  </head>
  <body>

  <!-- <div class="solid-container">
  <script type="text/javascript">
      $('.solid-container').FlipBook({pdf: 'Storage/{{$daftarbuku->file}}'});
    </script>
  </div> -->

  <div class="container">
    <a href="/download/{{$daftarbuku->file}}" class="btn btn-primary btn-sm active" role="button" aria-pressed="true">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
        <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
      </svg>
      Download 
    </a>
    
    <span style="float: right">
      @if (auth()->user()->level == 'atasan')
      <a href="/Admindashboard" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Kembali</a>
      @elseif (auth()->user()->level == 'staff')
      <a href="/Userdashboard" class="btn btn-danger btn-sm active" role="button" aria-pressed="true">Kembali</a>
      @endif
    </span>
  </div>

  <br/>

  <div class="flip-book-container solid-container" src= "{{asset ('Storage/'.$daftarbuku->file)}}">

  </div>
  
   <!-- <div class="text-center my-3">
    <iframe src="{{url ('Storage/'.$daftarbuku->file)}}" width="595" height="485" 
     frameborder="0" marginwidth="0" marginheight="0" scrolling="no" 
     style="border:1px solid #CCC; border-width:1px; margin-bottom:5px; max-width: 100%;"
     allowfullscreen></iframe>
  </div> -->
  
  <script type="text/javascript" src="/flipbook/js/html2canvas.min.js"></script>
  <script type="text/javascript" src="/flipbook/js/three.min.js"></script>
  <script type="text/javascript" src="/flipbook/js/pdf.min.js"></script>

  <script type="text/javascript" src="/flipbook/js/3dflipbook.min.js"></script>

  </body>
</html>
    



    