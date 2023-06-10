<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;

class MasyarakatController extends Controller
{
    public function index(){
        $masyarakats = Masyarakat::all();
        return view('Masyarakats.index', compact('masyarakats'));
    }

    public function destroy($id_masyarakat){
        $masyarakats = Masyarakat::find($id_masyarakat);
        $masyarakats->delete();

        Toastr::error('Data Berhasil di hapus', 'OK', ["positionClass" => "toast-top-right"]);
        return redirect()->route('routeM.index')->with('success');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $masyarakats = Masyarakat::where('nama', 'LIKE', "%$search%")
            ->orWhere('telp', 'LIKE', "%$search%")
            ->orWhere('email', 'LIKE', "%$search%")
            ->orWhere('username', 'LIKE', "%$search%")
            ->orWhere('jenis_kelamin', 'LIKE', "%$search%")
            ->get();
        return view('Masyarakats.index', compact('masyarakats'));
    }

    public function show($id_masyarakat){
        $masyarakats = Masyarakat::where('id', $id_masyarakat)->firstOrFail();
        return view('Masyarakats.show', compact('masyarakats'));
    }
}
