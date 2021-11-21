<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DataPesertaController extends Controller
{
    public function index()
    {
        $data = DB::table('daftar')->orderby('daftar.id', 'desc')
                ->join('users', 'users.id', '=', 'daftar.id')
                ->get();
        return view('aslab.dataPeserta', ['data'=>$data]);
    }
    public function detail_data($id)
    {
        $detail = DB::table('daftar')->where('daftar.id', $id)
                    ->join('users', 'users.id', '=', 'daftar.id')
                    ->first();
        return view('aslab.detailData', ['detail'=>$detail]);
    }
    public function edit($id)
    {
        $informasi = DB::table('daftar')->where('daftar.id', $id)
                    ->join('users', 'users.id', '=', 'daftar.id')
                    ->first();
        return view('aslab.editStatus', ['informasi'=>$informasi]);
    }
    public function edit_status(Request $status, $idp)
    {
        $status  = $status->status;
        DB::table('daftar')->where('id', $idp)
                            ->update(['status' => $status]);
        DB::table('users')->where('id', $idp)
                            ->update(['role' => $status]);
        return redirect()->action([DataPesertaController::class, 'index']);
    }
}
