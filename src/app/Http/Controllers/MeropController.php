<?php

namespace App\Http\Controllers;

class MeropController extends Controller
{
    public function index()
    {
        $events = [
            ['title' => 'Региональные', 'date' => '2025-10-30'],
            ['title' => 'Всероссийские', 'date' => '2025-10-30']
        ];
        return view('merop.index', ['events' => $events]);
    }
}