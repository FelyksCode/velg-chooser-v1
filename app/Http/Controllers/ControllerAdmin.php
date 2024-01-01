<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAdmin extends Controller
{
    public function loginpage()
    {
        return view('login');
    }

    public function adminlogin(Request $request)
    {
        $validated = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if ($validated == 0) return back();


        if ($request->username != 'admin')
            return back()->withErrors('wrong username');

        if ($request->password != 'admin')
            return back()->withErrors('wrong password');

        return view('admin.admin');
    }

    public function addVelg()
    {
        return view('admin.addVelg');
    }

    public function storeVelg(Request $request)
    {
        // dd($request);
        echo 'Masukin data ke database';

        return redirect('/list'); //ke list velg
    }
}
