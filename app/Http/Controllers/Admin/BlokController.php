<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blok;
use Illuminate\Http\Request;

class BlokController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloks = Blok::all();
        return view('admin.blok.index', ['bloks' => $bloks]);
    }

    public function create()
    {
        return view('admin.blok.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'  =>  'required',

            'image'    =>  'nullable|image',
        ]);

        $blok = Blok::add($request->all());
        $blok->uploadImage($request->file('image'));
        return redirect()->route('blok.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blok = Blok::find($id);
        return view('admin.blok.edit', compact('blok'));
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
        $blok = Blok::find($id);

        $this->validate($request, [
            'title'  =>  'required',

            'image'    =>  'nullable|image'
        ]);

        $blok->edit($request->all()); //name,email
        $blok->uploadImage($request->file('image'));
        return redirect()->route('blok.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blok::find($id)->delete();
        return redirect()->route('blok.index');
    }

    public function toggle(Blok $blok)
    {


        $blok->toggleStatus();

        return redirect()->back();
    }

}
