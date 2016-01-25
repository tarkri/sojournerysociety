<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{

    /**
     * PagesController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        return view('pages.home');
    }
}
