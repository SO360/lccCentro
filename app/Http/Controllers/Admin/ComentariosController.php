<?php

namespace App\Http\Controllers\Admin;

use App\Comentario;
use App\Http\Controllers\Controller;
use Illuminate\Config\all;
use Illuminate\Http\Request;

class ComentariosController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('prensa.comentario.comentario');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	public function comentarioData(Request $request) {
		$register = Comentario::all();
		//$register = Persona::where('tipo_persona', 1)->get();
		$con = 1;
		return datatables($register)->addColumn('id', function ($val) use (&$con) {
			return $val->id;
		})->addColumn('nombre', function ($val) {
			return $val->nombre;
		})->addColumn('correo', function ($val) {
			return $val->email;
		})->addColumn('mensaje', function ($val) {
			return "<div id='para'><p>" . $val->mensaje . "</p></div>";
		})->addColumn('responder', function ($val) {
			return "<a href='mailto:" . $val->email . "'><button type='button'  class='editar btn btn-primary'><i class='fa fa-pencil-square-o'></i></button></a>";
		})->rawColumns(['responder', 'mensaje'])->make(true);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id) {
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id) {
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id) {
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id) {
		//
	}
}
