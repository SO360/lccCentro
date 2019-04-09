<?php

namespace App\Http\Controllers\CentroLiga;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactoController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('web.contacto');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	public function createComentario(Request $request) {
		$slug = str_random(180);
		$insertid = \DB::table('comentarios')->insertGetId(
			['nombre' => $request->nombre, 'email' => $request->email, 'mensaje' => $request->mensaje, 'token' => $slug]);
		Session::flash('mensaje_success', 'Sus datos fueron guardados correctamente');
		return 0;
	}
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		//
		$response = $_POST["g-recaptcha-response"];
		$url = 'https://www.google.com/recaptcha/api/siteverify';
		$data = array(
			'secret' => '6Le3QJYUAAAAAAceGQKhPhN_F897nLnV9xdcq-cE',
			'response' => $_POST["g-recaptcha-response"],
		);
		$options = array(
			'http' => array(
				'method' => 'POST',
				'content' => http_build_query($data),
				'header' => 'Content-Type: application/x-www-form-urlencoded',
			),
		);
		$context = stream_context_create($options);
		$verify = file_get_contents($url, false, $context);
		$captcha_success = json_decode($verify);
		if ($captcha_success->success == false) {
			Session::flash('mensaje_info', 'Su incripción no se ha realizado ,recuerde que debe rellenar todos los campos');
			return view('web.contacto');
		} else if ($captcha_success->success == true) {
			$slug = str_random(180);
			$insertid = \DB::table('comentarios')->insertGetId(
				['nombre' => $request->input('nombre'), 'email' => $request->input('email'), 'mensaje' => $request->input('message'), 'token' => $slug]);
			Session::flash('mensaje_success', 'Su incripción no se ha realizado ,recuerde que debe rellenar todos los campos');
			return view('web.contacto');
		}

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
