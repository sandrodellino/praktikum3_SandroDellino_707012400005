<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TamuController extends Controller
{
     public function hasiltamu (Request $request) {
        $namalengkap = $request->input('namalengkap');
        $jeniskelamin = $request->input('jeniskelamin');
        $alamatpenginapan = $request->input('alamatpenginapan');

        return view ('hasiltamu', compact ('namalengkap', 'jeniskelamin', 'alamatpenginapan'));
    }

    public function datatamu (){
        return view ('datatamu');
    }
}
