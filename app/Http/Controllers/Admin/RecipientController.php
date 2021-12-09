<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Recipient;
use Illuminate\Http\Request;

class RecipientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $recipients = Recipient::all();
        return view('admin.recipient.index', ['recipients' => $recipients]);
    }

    public function create()
    {
        return view('admin.recipient.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'name' => 'required',
            'number' => 'required',
            'avatar'    =>  'nullable|image',

        ]);
        $recipient = Recipient::add($request->all());
        $recipient->uploadAvatar($request->file('avatar'));
        return redirect()->route('recipient.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipient = Recipient::find($id);
        return view('admin.recipient.edit', compact('recipient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $recipient = Recipient::find($id);

        $this->validate($request, [
            'title' => 'required',
            'subtitle' => 'required',
            'name' => 'required',
            'number' => 'required',
            'avatar'    =>  'nullable|image',
        ]);

        $recipient->edit($request->all()); //name,email
        $recipient->uploadAvatar($request->file('avatar'));
        return redirect()->route('recipient.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Recipient::find($id)->delete();
        return redirect()->route('recipient.index');
    }

    public function toggle(Recipient $recipient)
    {
        $recipient->toggleStatus();
        return redirect()->back();
    }
}
