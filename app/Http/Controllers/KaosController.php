<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Kaos;
class KaosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $kaos=Kaos::all();
        return view('kaos.index',compact('kaos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('kaos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'model' => 'required|max:255',
            'bahan' => 'required|min:6',
            'warna' => 'required|max:50',
            'harga' => 'required'
            ]);
        $kaos = new Kaos;
        $kaos->model = $request->model;
        $kaos->bahan = $request->bahan;
        $kaos->warna = $request->warna;
        $kaos->harga = $request->harga;
        $kaos->save();
        return redirect()->route('kaos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Kaos  $kaos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kaos = Kaos::findOrFail($id);
        return view('kaos.show',compact('kaos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Kaos  $kaos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kaos = Kaos::findOrFail($id);
        return view('kaos.edit',compact('kaos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Kaos  $kaos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kaos $kaos)
    {
        $this->validate($request,[
            'model' => 'required|max:255',
            'bahan' => 'required|min:6',
            'warna' => 'required|max:50',
            'harga' => 'required'
            ]);
        $kaos = new Kaos;
        $kaos->model = $request->model;
        $kaos->bahan = $request->bahan;
        $kaos->warna = $request->warna;
        $kaos->harga = $request->harga;
        $kaos->save();
        return redirect()->route('kaos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Kaos  $kaos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kaos = Kaos::findOrFail($id);
        $Kaos->delete();
        return redirect()->route('kaos.index');
    }
}
