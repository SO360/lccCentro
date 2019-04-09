<?php

namespace App\Http\Controllers;

use App\Comentario;
use App\Model\Inscripcion;

class HomeController extends Controller {
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$ins = Inscripcion::all();
		$ins = count($ins);
		$com = Comentario::all();
		$com = count($com);
		return view('home', ['ins' => $ins, 'com' => $com]);
	}
}
