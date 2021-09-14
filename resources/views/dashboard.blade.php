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
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    @if (auth()->user()->level == 'atasan')
                    <div class="mt-8 text-2xl">
                        <p class="center"> Selamat datang di Halaman Atasan Arsip Dokumen Universitas Pertamina!<p>
                    </div>

                    <div class="mt-6 text-gray-500">
                        <p class="center">Tempat untuk menyimpan, membaca, dan mengumpulkan dokumen Universitas Pertamina.
                            Untuk melihat daftar dokumen, silahkan tekan "Daftar Dokumen" di pojok kiri atas.<p>
                    </div>
                    @elseif (auth()->user()->level == 'staff')
                    <div class="mt-8 text-2xl">
                        <p class="center"> Selamat datang di Halaman Staff Arsip Dokumen Universitas Pertamina!<p>
                    </div>

                    <div class="mt-6 text-gray-500">
                    <p class="center">Tempat untuk membaca dokumen Universitas Pertamina.
                    Untuk melihat daftar dokumen, silahkan tekan "Daftar Dokumen" di pojok kiri atas.<p>

                    </div>
    @endif
    
</div>
</x-app-layout>
