<?php namespace App\Controllers;

class TurismoController extends BaseController
{
	public function index()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Turismo/Index').
				  view('Plantilla/footer');

		return $vistas;
    }
    
	public function Jalisco()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Turismo/Jalisco').
				  view('Plantilla/footer');

		return $vistas;
	}
	
	public function NLeon()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Turismo/NLeon').
				  view('Plantilla/footer');

		return $vistas;
	}
	
	public function Yucatan()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Turismo/Yucatan').
				  view('Plantilla/footer');

		return $vistas;
	}

	public function BCalifornia()
	{

		$vistas = view('Plantilla/header').
				  view('Plantilla/menu').
				  view('Turismo/BCalifornia').
				  view('Plantilla/footer');

		return $vistas;
	}
	//--------------------------------------------------------------------

}