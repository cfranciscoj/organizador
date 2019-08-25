<?php

namespace Org;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class AdminPerfil extends Model
{
  public function TraeRol(){
  		$qry = <<<EOT
  		            SELECT rol.id AS id_rol,
                         rol.description AS nombre_rol
        					  FROM roles rol;

EOT;
  		return DB::select($qry);
  	}
}
