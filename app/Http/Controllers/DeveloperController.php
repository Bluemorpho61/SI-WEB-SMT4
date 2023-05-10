<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeveloperController extends Controller
{
    public function index()
    {
        return view('devHome');
    }
    public function showCari()
    {
        return view('pages.developer.cariproyek');
    }
    public function daftarPro()
    {
        return view('pages.developer.daftarproyek');
    }
    public function showTim()
    {
        return view('pages.developer.profiltim');
    }
}