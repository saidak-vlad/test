<?php

namespace App\Http\Controllers;
use App\Models\Recipient;
use App\Models\Blok;
use App\Models\Contact;
use App\Models\Events;
use App\Models\Headersection;
use App\Models\Logotype;
use App\Models\Menu;
use App\Models\Twosection;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $recipients = Recipient::all();
        $events = Events::all();
        $logotypes = Logotype::all();
        $bloks = Blok::all();
        $contacts = Contact::all();
        $users = User::all();
        $twosections = Twosection::all();
        $headersections = Headersection::all();
        $menus = Menu::all();
        return view('home', [
            'menus' => $menus,
            'headersections' => $headersections,
            'twosections' => $twosections,
            'users'   =>  $users,
            'contacts' => $contacts,
            'bloks' => $bloks,
            'logotypes'   =>  $logotypes,
            'events' => $events,
            'recipients' => $recipients,
        ]);
    }
}
