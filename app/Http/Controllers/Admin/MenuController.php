<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', ['menus' => $menus]);
    }

    public function create()
    {
        return view('admin.menu.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title'	=>	'required' //обязательно
        ]);

        Menu::create($request->all());
        return redirect()->route('menu.index');
    }

    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('admin.menu.edit', ['menu' => $menu]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title'	=>	'required' //обязательно
        ]);
        $menu = Menu::find($id);
        $menu->update($request->all());
        return redirect()->route('menu.index');
    }
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return redirect()->route('menu.index');
    }
    public function show()
    {

    }
}

