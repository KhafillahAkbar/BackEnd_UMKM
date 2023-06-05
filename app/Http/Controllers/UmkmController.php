<?php

namespace App\Http\Controllers;

use App\Models\Umkm;
use Illuminate\Http\Request;

class UmkmController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $umkm = Umkm::where('umkm_name','LIKE','%' .$request->search. '%')
            -> orwhere('umkm_owner','LIKE','%' .$request->search. '%')
            -> orwhere('umkm_address','LIKE','%' .$request->search. '%')->get();
        }else{
            $umkm = Umkm::all();
        }
       return view('umkm.index', compact(['umkm']));
    }
    public function show($id)
    {
    $umkm = Umkm::find($id);
    return view('umkm.detail', compact('umkm'));
    }
}
