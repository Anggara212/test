<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
        public function index(){
            $data = Kelas::all();
            return view('kelas\kelas',compact('data'));
        }
        public function tambahkelas(){
            return view('kelas\tambahkelas');
    }
    public function store(request $request){
        $this-> validate($request, [
            'namakelas'
          , 'waliKelas'
        ]);
        Kelas::create($request->all());
        return redirect(route('kelas'));
    }
    public function tampilankelas($id){
        $data = kelas::find ($id);
    return view('kelas/editkelas',compact('data'));
   }
   public function update(request $request, $id){

    $data = kelas::find($id);
    $data->update($request->all());
    return redirect()->route('kelas');
}   
    public function destroy($id){
    $data = Kelas::find($id);
    $data->delete();
    return redirect()->route('kelas');
}
}
