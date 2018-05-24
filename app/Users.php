<?php

namespace Pruebas;

use Illuminate\Database\Eloquent\Model;


class Users extends Model
{
  protected $table = 'users';

protected $fillable  = ['firt_name','last_name','cedula','email','password','sex','education','profile','birthday'];

}
