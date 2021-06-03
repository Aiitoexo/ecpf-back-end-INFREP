<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\RoomAndSuite;
use App\Models\Testimony;
use function count;
use function dd;
use function rand;
use function view;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_rooms = RoomAndSuite::all();

        $all_menus = Menu::all();

        $all_testimony = Testimony::all();

        return view('pages.homepage.index', [
            'all_rooms' => $all_rooms,
            'all_menus' => $all_menus,
            'all_testimony' => $all_testimony
        ]);
    }
}
