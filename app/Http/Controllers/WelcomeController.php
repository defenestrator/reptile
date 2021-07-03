<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * return index, site homepage, root, return something!
     *
     * @return void
     *
     * Well, that was disappointing
     */
    public function index()
    {
        return view('welcome');
    }
