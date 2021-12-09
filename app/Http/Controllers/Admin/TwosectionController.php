<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Models\Twosection;
use Illuminate\Http\Request;

class TwosectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $twosections = Twosection::all();
        return view('admin.twosection.index', ['twosections' => $twosections]);

    }

    public function create()
    {
        return view('admin.twosection.create');
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
            'content' =>  'required',
            'list'  =>  'required',
            'image'    =>  'nullable|image'
        ]);

        $twosection = Twosection::add($request->all());
        $twosection->uploadImage($request->file('image'));

        return redirect()->route('twosection.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $twosection = Twosection::find($id);
        return view('admin.twosection.edit', compact('twosection'));
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
        $twosection = Twosection::find($id);

        $this->validate($request, [
            'title'  =>  'required',
            'content'  =>  'required',
            'list'  =>  'required',
            'image'    =>  'nullable|image'
        ]);

        $twosection->edit($request->all()); //name,email
        $twosection->uploadImage($request->file('image'));

        return redirect()->route('twosection.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Twosection::find($id)->remove();

        return redirect()->route('twosection.index');
    }


    public function toggle(Twosection $twosection)
    {
        $twosection->toggleStatus();
        return redirect()->back();
        }

}
