<?php

namespace Http\Controllers\Centro;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class InscribirController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {

	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function addFile($file) {

		$guessFileExtension = $file->guessExtension();
		$path = $file->move('img', $newName . '.' . $guessFileExtension);

		/*	$insertid = \DB::table('image_depots')->insertGetId(
				['path' => $path, 'type_id' => 0, 'status' => 0, 'slug' => $slug]);*/

		return $path;

	}

	public function inscribir(Request $request) {
		return response()->json($request->usuario);

	}
	public function create() {
		$name = $request->input('name');
		$dni = $request->input('dni');
		$email = $request->input('email');
		$cell = $request->input('cell');
		$curso = $request->input('curso');
		$archivo = $request->file('archivo');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$name = $request->input('name');
		$dni = $request->input('dni');
		$email = $request->input('email');
		$cell = $request->input('cell');
		$curso = $request->input('curso');
		$archivo = $request->file('archivo');
		$slug = str_random(180);
		if ($request->file('archivo')) {

			$path = $this->addFile($request->file('archivo'));
			$insertid = \DB::table('personas')->insertGetId(
				['nombre' => $name, 'dni' => $path_secundaria, 'email' => $email, 'tipo_persona' => 1, 'numero' => $cell, 'token' => $slug]);
			Session::flash('mensaje_success', 'Sus datos fueron guardados correctamente');
		} else {
			Session::flash('mensaje_success', 'Sus datos fueron guardados correctamente');
		}
		return response()->json(2);
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
