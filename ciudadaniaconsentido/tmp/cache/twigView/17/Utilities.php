<?php
namespace App\Objects;


/**
 * Application setup class.
 *
 * This defines the bootstrapping logic and middleware layers you
 * want to use in your application.
 */
class Utilities 
{
	//function __construct() {
   //}
	public static function monthName($month=null){
		$name = '';
		switch($month){
		case 1 :	$name = 'Enero';
					break;
		case 2 :	$name = 'Febrero';
					break;
		case 3 :	$name = 'Marzo';
					break;
		case 4 :	$name = 'Abril';
					break;
		case 5 :	$name = 'Mayo';
					break;
		case 6 :	$name = 'Junio';
					break;
		case 7 :	$name = 'Julio';
					break;
		case 8 :	$name = 'Agosto';
					break;
		case 9 :	$name = 'Septiembre';
					break;
		case 10 :	$name = 'Octubre';
					break;	
		case 11	:	$name = 'Noviembre';
					break;	
		case 12 :	$name = 'Diciembre';
					break;				
		}
		return $name;
	}
	public static function ajaxResponseTemplate($response_id=null){
		$msg="";
		switch($response_id){
			case "OK": $msg= "OK";
					break;
			case "SV": $msg= "Ocurrio un error al guardar la información";
					break;
			case "EM": $msg= "Ya existe un usuario con esa dirección de correo. Ingresa una nueva o intenta recuperar tu contraseña";
					break;
			case "TK": $msg= "El token proporcionado expiro o ya fue utilizado. Solicita uno nuevo";
					break;
			case "TE": $msg= "El token proporcionado no es valido";
					break;
			case "ER": $msg= "Error no especificado";
					break;	
			case "CN": $msg= "Error en la consulta";
					break;
			case "AUT": $msg= "No existe inicio de sesión";
					break;						
		}
		return '{"id":"'.$response_id.'","msg":"'.$msg.'"}';
	}
	public static function ajaxResponse($response_id=null,$response_msg=null){
		return '{"id":"'.$response_id.'","msg":"'.$response_msg.'"}';
	}

}
