<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function index()
    {
    	return view('pages.home');
    }

    public function about()
    {
    	return view('pages.about');
    }

    public function plans()
    {
    	return view('pages.plans');
    }

    public function services()
    {
      return view('pages.services');
    }

    public function benefits()
    {
      return view('pages.benefits');
    }

    public function centers()
    {
      return view('pages.centers');
    }

    public function offices()
    {
      return view('pages.offices');
    }
}
