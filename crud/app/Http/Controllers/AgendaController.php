<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class AgendaController extends Controller
{
    public function index(){
        $data = Agenda::all();
        return view('agenda\agenda',compact('data'));
    }
    public function tambahagenda(){

        return view('agenda\tambahagenda');
    }
    public function store(request $request){
        $this-> validate($request, [
            'namaguru'
            , 'materipembelajaran'
            , 'matapelajaran'
            ,'jampelajaran'
            , 'absensi'
            , 'kelas'
            ,'jenispembelajaran'
            ,'linkpembelajaran'
            , 'dokumentasi'
            , 'keterangan'
        ]);
        $data = agenda::create($request->all());
        if($request->hasFile('dokumentasi')){
            $request->file('dokumentasi')->move('fotodokumentasik/', $request->file('dokumentasi')->getClientOriginalName());
            $data->dokumentasi = $request->file('dokumentasi')->getClientOriginalName();
            $data->save();
        }
        return redirect(route('agenda'));
    
}
    public function tampilan($id){
        $data = Agenda::find ($id);
    return view('agenda/editagenda',compact('data'));
   }
   public function update(request $request, $id){

    $data = Agenda::find($id);
    $data->update($request->all());
    return redirect()->route('agenda');
}   
    public function destroy($id){
    $data = Agenda::find($id);
    $data->delete();
    return redirect()->route('agenda');
}
}

