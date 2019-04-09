<?php

namespace App\Http\Controllers\CentroLiga;

use App\Http\Controllers\Controller;
use App\Mail\IncripcionesMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class InscripcionController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		$curso = DB::table('cursos')->get();
		return view('web.inscripcion', ['curso' => $curso]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create() {
		//
	}

	public function addFile($file) {

		if ($file->guessExtension() == 'jpeg' || $file->guessExtension() == 'png') {

			$newName = str_random(100);
			$guessFileExtension = $file->guessExtension();
			$path = $file->move('img', $newName . '.' . $guessFileExtension);

			/*	$insertid = \DB::table('image_depots')->insertGetId(
					['path' => $path, 'type_id' => 0, 'status' => 0, 'slug' => $slug]);*/

			return $path;
		} else {
			return 0;
		}

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
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
			return view('web.inscripcion');
		} else if ($captcha_success->success == true) {
			$name = $request->input('name');
			$dni = $request->input('dni');
			$email = $request->input('email');
			$cell = $request->input('cell');
			$curso = $request->input('curso');
			$tipo = $request->input('tipo');
			$archivo = $request->file('archivo');
			$slug = str_random(180);
			$slug2 = str_random(180);
			$fecha = date("Y") . "-" . date("m") . "-" . date("d");

			if ($request->file('archivo')) {

				$path = $this->addFile($request->file('archivo'));
				if ($path == 0) {
					Session::flash('mensaje_errors', 'Fomato de imagen erróneo , escoger tipo JPG o PNG');
					return $this->index();
				}
				// si existe
				$persona = \DB::table('personas')->where('dni', $dni)->get();
				$insertid = 0;

				if (count($persona) != 0) {
					// ya existe la persona

					$insertid = $persona[0]->id;

				} else {

					// creo la persona
					$insertid = \DB::table('personas')->insertGetId(
						['nombre' => $name, 'dni' => $dni, 'email' => $email, 'tipo_persona' => 1, 'token' => $slug, 'numero' => $cell]);

				}

				$insc = \DB::table('inscripcions')->where('id_persona', $insertid)->where('tipo_inscripcion', $tipo)->get();

				if (count($insc) != 0) {
					// ya existe la persona
					//$insertid = $persona[0]->id;
					Session::flash('mensaje_errors', 'Ya se encuentra inscrito en el curso');

				} else {
					// creo la inscripción
					$insertid2 = \DB::table('inscripcions')->insertGetId(['id_curso' => $curso, 'id_persona' => $insertid, 'tipo_inscripcion' => $tipo, 'voucher' => $path, 'token' => $slug2, 'fecha_inscripcion' => $fecha, 'estado' => 0]);
					Mail::to($email)->queue(new IncripcionesMail($insertid2));

					Session::flash('mensaje_success', 'Sus datos fueron guardados correctamente');
				}

				return $this->index();

			} else {
				Session::flash('mensaje_success', 'Sus datos no fueron guardados');
				return $this->index();
			}
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
