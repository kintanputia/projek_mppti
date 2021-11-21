@extends('layouts/labor')

@section('navigasi')
<nav>
    <a class="flex items-center px-4 py-2 text-gray-700 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="/dashboardaslab">
        <img class="w-5 h-5" viewBox="0 0 24 24" fill="none" src="img/home.png">
        <span class="mx-4 font-medium">Beranda</span>
    </a>

    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="/daftar_peserta">
        <img class="w-5 h-5" viewBox="0 0 24 24" fill="none" src="img/data.png">
        <span class="mx-4 font-medium">Data Peserta OR</span>
    </a>

    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 bg-gray-200 dark:bg-gray-700 dark:text-gray-200" href="/menupenilaian">
        <img class="w-5 h-5" viewBox="0 0 24 24" fill="none" src="img/grade.png">
        <span class="mx-4 font-medium">Kelola Nilai</span>
    </a>

    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="/pengaturanaslab">
        <img class="w-5 h-5" viewBox="0 0 24 24" fill="none" src="img/setting.png">
        <span class="mx-4 font-medium">Pengaturan</span>
    </a>
    <a href="{{url('/logout')}}" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
        <img class="w-5 h-5" viewBox="0 0 24 24" fill="none" src="img/logout.png">
        <span class="mx-4 font-medium">Logout</span>
    </a>
</nav>
@endsection


@section('content')
    <h2><center>Daftar Informasi Seputar OR</center></h2>
    <div class="col-md-12 bg-white p-4">
        <a href="/addinfo"><button class="btn btn-primary mb-3">Tambah Artikel</button></a>
        <table class="table table-responsive table-bordered table-hover table-stripped">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Judul</th>
                    <th>Isi</th>
                    <th>Tanggal Posting</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($informasi as $i => $info)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $info->judul }}</td>
                        <td>{{ $info->isi }}</td>
                        <td>{{ $info->created_at }}</td>
                        <td>
                            <a href="/detail/{{ $info->id }}"><button class="btn btn-blue">Detail</button></a>
                            <a href="/edit/{{ $info->id }}"><button class="btn btn-success">Edit</button></a>
                            <a href="/delete/{{ $info->id }}"><button class="btn btn-danger">Hapus</button></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection