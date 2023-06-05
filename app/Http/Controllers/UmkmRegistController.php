<?php

namespace App\Http\Controllers;

use App\Models\UmkmRegistration;
use Illuminate\Http\Request;

class UmkmRegistController extends Controller
{
    public function index(Request $request){
        if($request->has('search')){
            $umkm_registration = UmkmRegistration::where('umkm_name','LIKE','%' .$request->search. '%')
            -> orwhere('umkm_owner','LIKE','%' .$request->search. '%')->get();
        }else{
            $umkm_registration = UmkmRegistration::all();
        }
       return view('umkm_registration.index', compact(['umkm_registration']));
    }
    public function show($id)
    {
    $umkm_registration = UmkmRegistration::find($id);
    return view('umkm_registration.detail', compact('umkm_registration'));
    }
    public function destroy($id)
    {
        $umkm_registration = UmkmRegistration::find($id);
        $umkm_registration->delete();
        return redirect('/umkm_registration');
    }
}
