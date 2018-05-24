<?php

namespace Pruebas\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  public	function	addProfile()
  {

    return	view('add');
  }
  public	function	getIndex()
  {
    return view('welcome');
  }
  public	function	postProfile(Request $request)
  {
    $first_name	=	$request->first_name;
    $last_name	=	$request->last_name;
    $Ced	=	$request->Ced;
    $email	=	$request->email;
    $pass	=	$request->pass;
    $conpass	=	$request->conpass;
    $Estudios	=	$request->Estudios;
    if ($request->men) {
      $sex = $request->men;
    }
    else {
      $sex = $request->women;
    }
    $dia =	$request->dia;
    $mes =	$request->mes;
    $anno =	$request->anno;
    $birthday = $dia.'/'.$mes.'/'.$anno;
    $photo = $request->photo;
    DB::table('users')->insert(
      ['firt_name'] -> $first_name,
      ['last_name'] -> $last_name,
      ['cedula'] -> $Ced,
      ['email'] -> $email,
      ['password'] -> $pass,
      ['sex'] -> $sex,
      ['education'] -> $Estudios,
      ['profile'] -> $photo,
      ['birthday'] -> $birthday
    );
  }
}
