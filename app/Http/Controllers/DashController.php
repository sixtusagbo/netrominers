<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    /**
     * Display the rules page.
     *
     * @return \Illuminate\Http\Response
     */
    public function rules()
    {
        return view('dash.rules');
    }

    /**
     * Display the support page.
     *
     * @return \Illuminate\Http\Response
     */
    public function support()
    {
        return view('dash.support');
    }
}
