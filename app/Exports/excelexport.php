<?php

namespace App\Exports;

use App\Models\rak_buku;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Database\Eloquent\Collection;

class excelexport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $rak = rak_buku::join('buku','rak_buku.id_buku', '=', 'buku.id')->join('jenis_buku', 'rak_buku.id_jenis_buku', '=', 'jenis_buku.id')->get();

        $data = [];
        foreach ($rak as $u) {

            $data[] = [
                'id' => $u->id ?? '-',
                'judul' => $u->judul ?? '-',
                'jenis' => $u->jenis ?? '-',
                'tahun_terbit' => $u->tahun_terbit ?? '-',
            ];
        }

        $collection = new Collection($data);

        // dd($collection);
        return $collection;
    }
}