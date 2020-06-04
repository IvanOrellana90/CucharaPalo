<?php

namespace App\Http\Controllers;

use App\Table;

class OrganizationController extends Controller
{
    public function organizations()
    {
        $data = Table::all();

        return view('organizations', [
            'data' => $data
        ]);
    }
}