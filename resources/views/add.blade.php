<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Añadir Usuario</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
  <link href="{{	url('/assets/css/bootstrap.min.css')	}}" rel="stylesheet" type="text/css">
  <!-- <link href="{{	url('/assets/bootstrap/js/bootstrap.min.js')	}}" rel="stylesheet" type="text/css"> -->
</head>
<body>
  <section id="formulario">
    <form id="form" class="" action="{{url('users')}}" method="post">
      {{csrf_field()}}
      <br>
      <label for="">Nombre: </label><input type="text" name="first_name" id="first_name" value="">
      <br>
      <label for="">Apellido: </label><input type="text" name="last_name" id="last_name" value="">
      <br>
      <label for="">Cedula: </label><input type="text" name="Ced" id="Ced" value="">
      <br>
      <label for="">Email: </label><input type="text" name="email" id="email" value="">
      <br>
      <label for="">Contraseña: </label><input type="password" name="pass" id="pass" value="">
      <br>
      <label for="">Confirmar Contraseña: </label><input type="password" name="conpass" id="conpass" value="">
      <br>
      <label	for="color">Sexo:</label>
      <br>
      <input	type="radio"	name="men"	id="men"	value="men">Hombre<br>
      <input	type="radio"	name="women"	id="women"	value="women">Mujer<br>
      <br>
      <select	name="Estudios">
        <option	value="primaria">Primaria</option>
        <option	value="secundaria">Secundaría</option>
        <option	value="universitario">Universitario</option>
        <option	value="maestria">Maestria</option>
        <option	value="doctorado">Doctorado</option>
      </select>
      <br>
      <label	for="imagen">Fonto de perfil:</label>
      <input	type="file"	name="photo"	id="photo">
      <br>
      <label	for="color">Interes:</label>
      <br>
      <label	for="color">Deportes:</label><input	type="checkbox"	name="color"	id="color"	value="">
      <label	for="color">Noticias:</label><input	type="checkbox"	name="color"	id="color"	value="">
      <label	for="color">Ocio:</label><input	type="checkbox"	name="color"	id="color"	value="">
      <label	for="color">Negocios:</label><input	type="checkbox"	name="color"	id="color"	value="">
      <label	for="color">Farandula:</label><input	type="checkbox"	name="color"	id="color"	value="">
      <br>
      <label for="">Día</label>
      <select	name="dia">
        <option	value="1">1</option>
        <option	value="2">2</option>
        <option	value="3">3</option>
        <option	value="4">4</option>
        <option	value="5">5</option>
        <option	value="6">6</option>
        <option	value="7">7</option>
        <option	value="8">8</option>
        <option	value="9">9</option>
        <option	value="10">10</option>
        <option	value="11">11</option>
        <option	value="12">12</option>
        <option	value="13">13</option>
        <option	value="14">14</option>
        <option	value="16">16</option>
        <option	value="17">17</option>
        <option	value="18">18</option>
        <option	value="19">19</option>
        <option	value="20">20</option>
        <option	value="21">21</option>
        <option	value="22">22</option>
        <option	value="23">23</option>
        <option	value="24">24</option>
        <option	value="25">25</option>
        <option	value="26">26</option>
        <option	value="27">27</option>
        <option	value="28">28</option>
        <option	value="29">29</option>
        <option	value="30">30</option>
        <option	value="31">31</option>
      </select>
      <label for="">Mes</label>
      <select	name="mes">
        <option	value="enero">enero</option>
        <option	value="febrero">febrero</option>
        <option	value="marzo">marzo</option>
        <option	value="abril">abril</option>
        <option	value="mayo">mayo</option>
        <option	value="junio">junio</option>
        <option	value="julio">julio</option>
        <option	value="agosto">agosto</option>
        <option	value="septiembre">septiembre</option>
        <option	value="octubre">octubre</option>
        <option	value="noviembre">noviembre</option>
        <option	value="diciembre">diciembre</option>
        </select>
      <label for="">Año</label>
      <select	name="anno">
        <option	value="1965">1965</option>
        <option	value="1966">1966</option>
        <option	value="1967">1967</option>
        <option	value="1968">1968</option>
        <option	value="1969">1969</option>
        <option	value="1970">1970</option>
        <option	value="1971">1971</option>
        <option	value="1972">1972</option>
        <option	value="1973">1973</option>
        <option	value="1974">1974</option>
        <option	value="1975">1975</option>
        <option	value="1976">1976</option>
        <option	value="1977">1977</option>
        <option	value="1980">1980</option>
        <option	value="1981">1981</option>
        <option	value="1982">1982</option>
        <option	value="1983">1983</option>
        <option	value="1984">1984</option>
        <option	value="1986">1986</option>
        <option	value="1987">1987</option>
        <option	value="1988">1988</option>
        <option	value="1989">1989</option>
        <option	value="1990">1990</option>
        <option	value="1991">1991</option>
        <option	value="1992">1992</option>
        <option	value="1993">1993</option>
        <option	value="1994">1994</option>
        <option	value="1995">1995</option>
        <option	value="1996">1996</option>
        <option	value="1997">1997</option>
        <option	value="1998">1998</option>
        <option	value="1999">1999</option>
        <option	value="2000">2000</option>
        <option	value="2001">2001</option>
        <option	value="2002">2002</option>
        <option	value="2003">2003</option>
        <option	value="2004">2004</option>
        <option	value="2005">2005</option>
        <option	value="2006">2006</option>
        <option	value="2007">2007</option>
        <option	value="2008">2008</option>
        <option	value="2009">2009</option>
        <option	value="2010">2010</option>
        <option	value="2011">2011</option>
        <option	value="2012">2012</option>
        <option	value="2013">2013</option>
        <option	value="2014">2014</option>
        <option	value="2015">2015</option>
        <option	value="2016">2016</option>
        <option	value="2017">2017</option>
        </select>
        <br>
      <input type="submit" name="submit" value="Registrar">
    </form>
  </section>
</body>
</html>
