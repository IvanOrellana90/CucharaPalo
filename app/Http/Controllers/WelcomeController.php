<?php

namespace App\Http\Controllers;

use App\Table;

class WelcomeController extends Controller
{

    public function welcome()
    {
        $data = Table::all();

        return view('welcome', [
            'data' => $data
        ]);
    }
}