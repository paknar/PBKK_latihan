<?php

namespace App\Http\Controllers;

use App\mhs;
use App\dosen;
use App\MataKuliah;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class MhsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $mhs = DB::table('mhs')->join('dosens','mhs.nipdosenwali','=','dosens.nip')->get();
        // $mhs = DB::select('select * from mhs join dosens on mhs.nipdosenwali = dosens.nip', [1]);
        $mhs = mhs::paginate(2);
        // return $matkul = MataKuliah::first()->mengambil[0]->mhs;
        // return $mhs[0]->dosen;
        // return str_pad(mt_rand(0, 999999), 6, '0', STR_PAD_LEFT);
        return view ('mhs.index2',compact('mhs'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dsn = dosen::pluck('namadosen','nip');
        return view ('mhs.create',compact('dsn'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        mhs::create($request->all());        
        return redirect('/mhs');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function show(mhs $mhs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function edit(mhs $mh)
    {
        // return $mh;
        $mhsnya    = mhs::findorfail($mh);
        $dosennya  = dosen::pluck('namadosen','nip');
        return view('mhs.edit',compact('mhsnya','dosennya'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, mhs $mh)
    {
        $mhsnya = mhs::findorfail($mh);
        // return $request;
        $mhsnya[0]->update($request->all());
    return redirect('/mhs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\mhs  $mhs
     * @return \Illuminate\Http\Response
     */
    public function destroy(mhs $mh)
    {
        $mhsnya = mhs::findorfail($mh);
        $mhsnya[0]->delete();
        return redirect('/mhs');

    }
}
