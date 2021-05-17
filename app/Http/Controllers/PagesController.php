<?php

namespace App\Http\Controllers;

use App\Models\Member;

class PagesController extends Controller
{
    public function home()
    {
        return \view('pages/index');
    }

    public function about()
    {
        return \view('pages/about', ['nama' => 'Suka Astawa']);
    }

    public function show($id)
    {
        $detail = Member::find($id);
        $nama = $detail->name;

        return \view('pages/about', ['nama' => $nama]);
    }
}
