<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $auth = Page::get_administrator($request->username, $request->password);

        if ($auth) {
            return redirect(url('dashboard'))->with('status', 'Berhasil Login');
        } else {
            return redirect(url('/login'))->with('status', 'Gagal login');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect(url('/login'));
    }

    public function template()
    {
        return view('HeroBiz.temp_fe.index');
    }
}
