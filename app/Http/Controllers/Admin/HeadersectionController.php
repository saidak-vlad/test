<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Models\Headersection;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class HeadersectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $headersections = Headersection::all();
        return view('admin.headersection.index', ['headersections' => $headersections]);
    }

    public function create()
    {
        return view('admin.headersection.create');
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
            'subtitle' =>  'required',
            'image'    =>  'nullable|image'
        ]);

        $headersection = Headersection::add($request->all());
        $headersection->uploadImage($request->file('image'));

        return redirect()->route('headersection.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $headersection = Headersection::find($id);
        return view('admin.headersection.edit', compact('headersection'));
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
        $headersection = Headersection::find($id);

        $this->validate($request, [
            'title'  =>  'required',
            'subtitle'  =>  'required',
            'image'    =>  'nullable|image'
        ]);

        $headersection->edit($request->all()); //name,email
        $headersection->uploadImage($request->file('image'));

        return redirect()->route('headersection.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Headersection::find($id)->remove();

        return redirect()->route('headersection.index');
    }
}


