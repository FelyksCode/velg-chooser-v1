<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VelgChooser extends Controller
{
    public function index()
    {
        return view('mainpage');
    }
    public function listpage()
    {
        return view('listvelg');
    }

    public function processForm(Request $request)
    {
        // Retrieve the selected options from the request
        $selectedOptions = json_decode($request->input('selectedOptions'), true);
        echo "<pre>";
        print_r($selectedOptions);
        echo "</pre>";



        // return redirect('/list');
    }
}
