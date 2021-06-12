<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\excelexport;
use App\Models\buku;
use App\Models\jenis_buku;
use App\Models\rak_buku;


class prak4 extends Controller
{
    public function view(){
        $prak4=rak_buku::join('buku','rak_buku.id_buku', '=', 'buku.id')->join('jenis_buku','rak_buku.id_jenis_buku', '=', 'jenis_buku.id')->get();
        // dd($prak4);
        return view('Prak0123', [
            'prak4' => $prak4,
        ]);

    }
    public function export(){
		return Excel::download(new excelexport, 'Data_1461900123.xlsx');
	}


}
