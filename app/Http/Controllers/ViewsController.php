<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
	public function Acceuil()
	{
		return view('adquation.acceuil');
	}

	public function Formation()
	{
		return view('adquation.Formation');
	}

	public function Conseil()
	{
		return view('adquation.Conseil');
	}

	public function Audit()
	{
		return view('adquation.Audit');
	}

	public function Portail()
	{
		return view('adquation.Portail');
	}
}
