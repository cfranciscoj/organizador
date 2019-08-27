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

    public function TraeUsuarioRol(){
    		$qry = <<<EOT
  		            SELECT usr.first_name AS nombre,
                         usr.last_name AS apellido,
                         usr.email AS correo,
                         rol.description AS rol,
                         usr.created_at AS fecha
                    FROM users usr
                   INNER
                    JOIN role_user rsur
                      ON usr.id = rsur.user_id
                   INNER
                    JOIN roles rol
                      ON rsur.role_id = rol.id;
EOT;
    		return DB::select($qry);
    	}

}
