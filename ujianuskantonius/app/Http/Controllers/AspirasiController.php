<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\InputASpirasi;
use App\Models\Penduduk;
use App\Models\Status;

class AspirasiController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $aspirasi = Aspirasi::all();   
        
        return view('aspirasi.index', compact('aspirasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aspirasi = Aspirasi::all();
        return view('aspirasi.create', compact('aspirasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Aspirasi::create($request->all());
        return redirect('aspirasi')->with('message','Data Berhasil Diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_aspirasi)
    {
        $aspirasi = Aspirasi::find($id_aspirasi);   
        return view('aspirasi.edit',compact('aspirasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_aspirasi)
    {
        $aspirasi = Aspirasi::find($id_aspirasi);
        $aspirasi->status = $request->get('status');
        $aspirasi->feedback = $request->get('feedback');
        $aspirasi->save();
        return redirect('aspirasi')->with('message','Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_aspirasi)
    {
        $aspirasi = Aspirasi::find($id_aspirasi);   
        $aspirasi->delete();
        
        return redirect('aspirasi')->with('message','Tanggapan Berhasil Dihapus');
    }
}
