<?php

namespace App\Controllers;

class PaginaController extends BaseController
{
	public function index()
	{
		$vistas = view('plantilla/header') .
			view('index') .
			view('plantilla/footer').
			view('plantilla/datos_modals')
			;

		return $vistas;
	}

	//--------------------------------------------------------------------

}
