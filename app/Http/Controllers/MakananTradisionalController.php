<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MakananTradisional;

use App\Http\Requests\MakananTradisionalRequest;


class MakananTradisionalController extends Controller
{
    public function index(){
        $MakananTradisional = MakananTradisional::get();
        return view('index', compact('MakananTradisional'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $MakananTradisional = MakananTradisional::where('id', $id)->first();
        return view('edit', compact('MakananTradisional'));
    }

    public function lihat($id){
        $MakananTradisional = MakananTradisional::where('id', $id)->first();
        return view('lihat', compact('MakananTradisional'));
    }

    public function store(MakananTradisionalRequest $request){
        $MakananTradisional = new MakananTradisional();

        $MakananTradisional->jenis_makanan = $request -> jenis_makanan;
        $MakananTradisional->asal_daerah = $request -> asal_daerah;

        $MakananTradisional->save();
        return redirect('/');   
    }
    


    public function update(MakananTradisionalRequest $request, $id){
        $MakananTradisional = MakananTradisional::where('id', $id)->first();
        $MakananTradisional->jenis_makanan = $request -> jenis_makanan;
        $MakananTradisional->asal_daerah = $request -> asal_daerah;
       

        $MakananTradisional->update();
        
        return redirect('/');   
    }

    public function hapus($id){
        $MakananTradisional = MakananTradisional::where('id', $id)->first();
        $MakananTradisional->delete();
        
        return redirect('/');   
    }
}
