<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Logotype;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class LogotypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $logotypes = Logotype::all();
        return view('admin.logotype.index', ['logotypes'   =>  $logotypes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.logotype.create');
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
            'copyright'  =>  'required',
            'imagelogotype'    =>  'nullable|image',
            'imagelogos'    =>  'nullable|image',

        ]);

        $logotype = Logotype::add($request->all());
        $logotype->uploadImagelogotype($request->file('imagelogotype'));
        $logotype->uploadImagelogos($request->file('imagelogos'));
        return redirect()->route('logotype.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $logotype = Logotype::find($id);
        return view('admin.logotype.edit', compact('logotype'));
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
        $logotype = Logotype::find($id);

        $this->validate($request, [
            'copyright'  =>  'required',
            'imagelogotype'    =>  'nullable|image',
            'imagelogos'    =>  'nullable|image',
        ]);

        $logotype->edit($request->all()); //name,email
        $logotype->uploadImagelogotype($request->file('imagelogotype'));
        $logotype->uploadImagelogos($request->file('imagelogos'));
        return redirect()->route('logotype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Logotype::find($id)->remove();

        return redirect()->route('logotype.index');
    }
}
