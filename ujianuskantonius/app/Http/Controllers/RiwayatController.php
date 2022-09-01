<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aspirasi;
use App\Models\InputASpirasi;
use App\Models\Penduduk;
use App\Models\Status;

class RiwayatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $aspirasi = Aspirasi::all();   
        
        return view('riwayat', compact('aspirasi'));
    }
}
