<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * return index, site homepage, root, return something!
     *
     * @return void
     */
    public function index()
    {
        return view('welcome');
    }
