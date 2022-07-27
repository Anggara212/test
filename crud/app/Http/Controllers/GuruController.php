<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guru;

class GuruController extends Controller
{
    public function index(){
        $data = Guru::all();
        return view('guru\guru',compact('data'));
    }
    public function tambahguru(){
        return view('guru\tambahGuru');
}
public function store(request $request){
    $this-> validate($request, [
        'namaguru',
        'nikguru',
        'namapelajaran',
        'username',
        'password'
    ]);
    Guru::create($request->all());
    return redirect(route('guru'));
    }

    public function tampilanguru($id){
    $data = Guru::find ($id);
    return view('guru/editguru',compact('data'));
    }

    public function update(request $request, $id){

    $data = Guru::find($id);
    $data->update($request->all());
    return redirect()->route('guru');
   }   
    public function destroy($id){
    $data = Guru::find($id);
    $data->delete();
    return redirect()->route('guru');
}
}
