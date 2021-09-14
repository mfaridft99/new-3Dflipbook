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
    <div class="mt-8 text-2xl">
        <p class="center"> Selamat datang di Arsip PDF Universitas Pertamina!<p>
    </div>

    <div class="mt-6 text-gray-500">
    @if (auth()->user()->level == 'atasan')
        <p class="center">Tempat untuk menyimpan, membaca, dan mengumpulkan arsip-arsip PDF penting Universitas Pertamina.
        Untuk melihat daftar buku, silahkan tekan "Daftar Buku" di pojok kiri atas.<p>
    @else
        <p class="center">Tempat untuk membaca arsip-arsip PDF penting Universitas Pertamina.
        Untuk melihat daftar buku, silahkan tekan "Daftar Buku" di pojok kiri atas.<p>
    @endif
    </div>
</div>
</x-app-layout>
