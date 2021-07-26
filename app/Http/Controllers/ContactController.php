<?php

namespace App\Http\Controllers;

/**
 * Class ContactController
 * @package App\Http\Controllers
 *
 * @author abellaali
 */
class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkUserTel');
    }

    /**
     * Show the contact page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.contact');
    }
}
