<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use App\Model\Curso;
use App\Model\Inscripcion;
use App\Model\Persona;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use PDF;

class DocumentoSearchController extends Controller {
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		//
		//return view('mail.mensaje');
		return view('prensa.word.wordsearch');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function aceptarInscripcion(Request $request) {
		$flight = Inscripcion::find($request->id);

		$idpersona = $flight->id_persona;
		$flight->estado = 1;

		$flight->save();

		$persona = Persona::find($idpersona);

		if (Mail::to($persona->email)->queue(new DemoEmail($request->id))) {
			return response()->json('Mensaje enviado');
		} else {
			return response()->json('Mensaje no enviado');
		};
		return response()->json('Mensaje no enviado');

	}

	public function denegarInscripcion(Request $request) {
		$flight = Inscripcion::find($request->id);

		$flight->estado = -1;

		$flight->save();

		return response()->json($request->id);
	}

	public function dataT(Request $request) {
		$register = DB::table('inscripcions')
			->join('personas', 'personas.id', '=', 'inscripcions.id_persona')
			->join('cursos', 'cursos.id', '=', 'inscripcions.id_curso')
			->where('inscripcions.id_curso', $request->id)
			->where('inscripcions.estado', $request->id2)
			->select('personas.nombre', 'personas.tipo_persona', 'personas.email', 'inscripcions.id', 'personas.dni', 'inscripcions.voucher', 'inscripcions.estado')->get();
		//$register = Persona::where('tipo_persona', 1)->get();
		$con = 1;
		return datatables($register)
			->addColumn('id', function ($val) use (&$con) {
				return $val->id;
			})->addColumn('dni', function ($val) {
			return $val->dni;
		})->addColumn('nombre', function ($val) {
			return $val->nombre;
		})->addColumn('correo', function ($val) {
			return $val->email;
		})->addColumn('estado', function ($val) {
			if ($val->estado == 0) {
				return 'Recibido';
			} else if ($val->estado == 1) {
				return 'Aceptado';
			} else {
				return 'Rechazado';
			}
			return $val->estado;
		})->addColumn('voucher', function ($val) {
			return "<button class='editar btn btn-primary'  value='" . $val->voucher . "' href='#primary' type='button' data-toggle='modal'><h4><i class='glyphicon glyphicon-eye-open'></i><input style='display:none' value='" . $val->voucher . "'></input></h4></button>";
		})->rawColumns(['voucher'])->make(true);
	}

	public function create() {
		//

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request) {
		$register = Persona::where('tipo_persona', 1)->get();
		$con = 1;
		return datatables($register)
			->addColumn('id', function ($val) use (&$con) {
				return $con++;
			})
			->addColumn('nombre', function ($val) {
				return $val->nombre;
			})->addColumn('correo', function ($val) {
			return $val->nombre;
		})->addColumn('estado', function ($val) {
			if ($val->tipo_persona == 0) {
				return "Habilitado";
			} else {
				return "Deshabilitado";
			}

		})->addColumn('delate', function ($val) {
			return "<button type='button' id='eliminar' height='90' class='" . $val->id . "'>Eliminar</button>";
		})->rawColumns(['delate'])->make(true);
	}

	public function buscarCurso(Request $request) {

		$data = Curso::all();
		return response()->json($data);
	}

	public function showpdf(Request $request) {
		//	return view('reports.reciboPdf');
		//$cita = Cita::where('slug', $slug)->get();
		$pdf = 0;
		$curso = Curso::where('id', $request->sel1)->get();
		$namecurso = $curso[0]->nombre;
		if ($request->spdf == 0) {

			$register = DB::table('inscripcions')
				->join('personas', 'personas.id', '=', 'inscripcions.id_persona')
				->where('inscripcions.estado', 0)
				->select('personas.nombre', 'personas.email', 'personas.numero', 'inscripcions.voucher', 'personas.dni')->get();

			//$register = Inscripcion::where('estado', 0)->get();
			$pdf = PDF::loadView('report.historialrecibidos', ['register' => $register, 'respuesta' => 'Recibidas', 'curso' => $namecurso]);
		} else if ($request->spdf == 1) {
			$register = DB::table('inscripcions')
				->join('personas', 'personas.id', '=', 'inscripcions.id_persona')
				->where('inscripcions.estado', 1)
				->select('personas.nombre', 'personas.email', 'personas.numero', 'inscripcions.voucher', 'personas.dni')->get();
			$pdf = PDF::loadView('report.historialrecibidos', ['register' => $register, 'respuesta' => 'Aceptadas', 'curso' => $namecurso]);
		} else if ($request->spdf == -1) {
			$register = DB::table('inscripcions')
				->join('personas', 'personas.id', '=', 'inscripcions.id_persona')
				->where('inscripcions.estado', -1)
				->select('personas.nombre', 'personas.email', 'personas.numero', 'inscripcions.voucher', 'personas.dni')->get();
			$pdf = PDF::loadView('report.historialrecibidos', ['register' => $register, 'respuesta' => 'Rechazadas', 'curso' => $namecurso]);
		}

		$pdf->setPaper('a4', 'landscape')
			->setWarnings(false)
			->setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true]);
		//$pdf->setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);

		//$date_structs = Date::now()->format('Ymdhis');
		$recibo = "Recibo";

		return $pdf->stream($recibo);
		if ($condition == 1) {

			return $pdf->stream($recibo);
		} else {
			return $pdf->download($recibo);
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
