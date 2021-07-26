<?php

namespace App\Http\Controllers;

/**
 * Class VisitController
 * @package App\Http\Controllers
 *
 * @author abellaali
 */
class VisitController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('checkUserTel');
    }

    /**
     * Show the visit page
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('pages.visite');
    }
}
