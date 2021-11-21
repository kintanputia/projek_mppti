@extends('layouts/kalab')
@section('navigasi')
<nav>
    <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-200 dark:bg-gray-700 dark:text-gray-200" href="/dashboardkalab">
        <img class="w-5 h-5" viewBox="0 0 24 24" fill="none" src="{{asset("img/home.png")}}">
        <span class="mx-4 font-medium">Beranda</span>
    </a>

    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="/daftartahap">
        <img class="w-5 h-5" viewBox="0 0 24 24" fill="none" src="{{asset("img/data.png")}}">
        <span class="mx-4 font-medium">Data Open Recruitment</span>
    </a>

    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
        <img class="w-5 h-5" viewBox="0 0 24 24" fill="none" src="{{asset("img/setting.png")}}">
        <span class="mx-4 font-medium">Pengaturan</span>
    </a>

    <a href="{{url('/logout')}}" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
        <img class="w-5 h-5" viewBox="0 0 24 24" fill="none" src="{{asset("img/logout.png")}}">
        <span class="mx-4 font-medium">Logout</span>
    </a>
</nav>
@endsection

@section('content')
<div class="px-4 py-5 bg-white sm:p-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900" id="modal-title">
      <b>Informasi Seputar Open Recruitment LBI</b>
    </h3><hr>

    <div class="px-3 py-4 flex justify-center">
        <table class="w-full text-md bg-white shadow-md rounded mb-4 border">
            <thead>
                <tr class="border">
                    <th class="text-left p-3 px-5">No.</th>
                    <th class="text-left p-3 px-5">Judul</th>
                    <th class="text-left p-3 px-5">Isi</th>
                    <th class="text-left p-3 px-5">Tanggal Posting</th>
                </tr>
            </thead>
            <tbody>
                    @forelse ($info as $i => $info)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="p-3 px-5">{{ ++$i }}</td>
                            <td class="p-3 px-5">{{ $info->judul }}</td>
                            <td class="p-3 px-5">{{ $info->isi }}</td>
                            <td class="p-3 px-5">{{ $info->created_at }}</td>
                        </tr>
                    @empty
                    <tr class="border-b hover:bg-gray-100">
                        <td colspan="4"><center><p class="text-sm text-gray-500">Informasi Tidak Tersedia</p></center></td>
                    </tr>
                    @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection