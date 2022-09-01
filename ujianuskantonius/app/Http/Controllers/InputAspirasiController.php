<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InputAspirasi;
use App\Models\Kategori;
use App\Models\Penduduk;
use App\Models\Aspirasi;



class InputAspirasiController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputaspirasi = InputAspirasi::all();
        return view('input.index', compact('inputaspirasi'));
     
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $inputaspirasi = InputAspirasi::all();
        return view('input.create', compact('inputaspirasi'));
    }
     public function search(Request $request)
    {
        $keyword = $request->search;
        $inputaspirasi = InputAspirasi::where('nik', 'like', "%" . $keyword . "%")->paginate(5);
        return view('input.index', compact('inputaspirasi'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        InputAspirasi::create($request->all());

        return redirect('input')->with('message','Data Berhasil Diinput');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_pelaporan)
    {
        $input = InputAspirasi::find($id_pelaporan);
        $input->delete();
        
        return redirect('/responaspirasi')->with('message','Data Berhasil Dihapus');
    }
}

