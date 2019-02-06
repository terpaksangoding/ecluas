<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        $data['result']=\App\Siswa::all();
        return view('siswa/index')->with($data);
    }
    public function create()
    {
        return view('siswa/form');
    }
    public function store(Request $request)
    {

    $rules=
    [
        'nis'             =>'required|unique:table_siswa',
        'nama_lengkap'    =>'required|max:100',
        'jenis_kelamin'   =>'required',
        'alamat'          =>'required',
        'no_tlp'          =>'required',
        'id_kelas'        =>'required|exists:table_kelas'
    ];
     $this->validate($request, $rules);
     
     $input = $request->all();
    
     $status =\App\Siswa::create ($input);
    

     if($status) return redirect (route('siswa'))->with('success', 'Data berhasil ditambahkan');
     else return redirect ('/')->with('error', 'Gagal ditambahkan');
    }
    public function edit($id)
    {
        $data['result'] = \App\Siswa::where('nis', $id) -> first();
        return view('siswa/form')  -> with($data);
    }
    public function update(Request $request, $id)
    {
        $rules = 
        [
            'nis'             =>'required',
            'nama_lengkap'    =>'required|max:100',
            'jenis_kelamin'   =>'required',
            'alamat'          =>'required',
            'no_tlp'          =>'required',
            'id_kelas'        =>'required|exists:table_kelas'
        ];

        $this ->validate ($request, $rules);

        $input = $request->all();

        $result = \App\Siswa::where('nis', $id)->first();
        $status = $result->update($input);

        if($status) return redirect (route('siswa')) ->with('success', 'Data berhasil diUpdate');
        else return redirect (route('siswa'))->with('error', 'Gagal diUpdate'); 
    }
    public function destroy(Request $request, $id)
    {
        $result = \App\Siswa::where('nis', $id)->first();
        $status = $result -> delete();

        if($status) return redirect (route('siswa')) ->with('success', 'Data berhasil diHapus');
        else return redirect (route('siswa'))->with('error', 'Gagal diHapus'); 
    }
  
}
