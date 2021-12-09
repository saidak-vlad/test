<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactForm;
use App\Models\Menu;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        $menus = Menu::all();
        return view('admin.menu.index', ['menus' => $menus]);
    }

    /**
     *
     */


    public function contactForm(ContactFormRequest $request)
    {
    Mail::to("saidakvlados@gmail.com")->send(new ContactForm($request->validated()));
        return redirect()->back();
    }
}
