<?php

/**
 * Created by Reliese Model.
 */

namespace App\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Class InscripcionMenor
 *
 * @property int $id
 * @property string $nombre_tutor_madres
 * @property string $apellido_paterno_tutor
 * @property string $apellido_materno_tutor
 * @property string $calle
 * @property string $numero_domicilio
 * @property string $colonia
 * @property string $alcaldia
 * @property string $codigo_postal
 * @property string $tipo_nomina_1
 * @property string $num_empleado_1
 * @property string $num_plaza_1
 * @property string $clave_dependencia_1
 * @property string $nivel_salarial_1
 * @property string $seccion_sindical_1
 * @property string $horario_laboral_ent
 * @property string $horario_laboral_sal
 * @property string $birthday
 * @property string $Edad_menor
 * @property string $email_correo
 * @property string $telefono_celular
 * @property string $telefono_3
 * @property string $nombre_menor_1
 * @property string $apellido_paterno_1
 * @property string $apellido_materno_1
 * @property string $curp_num
 * @property string $caci
 * @property string|null $terminos
 * @property string|null $rol_caci
 * @property int|null $correo_enviado
 * @property int|null $correo_enviado_not_recibida
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $ciclo_escolar
 * @property int $status
 * @property string|null $unidad_administrativa
 * @property string|null $rfc
 *
 * @property Collection|Documento[] $documentos
 * @property Collection|Log[] $logs
 * @property Collection|DatosRepositorioFinalPre[] $datos_repositorio_final_pres
 *
 * @package App\Model
 */
class InscripcionMenor extends Model
{
	protected $table = 'inscripcion_menor';

	protected $casts = [
		'correo_enviado' => 'int',
		'correo_enviado_not_recibida' => 'int',
		'status' => 'int'
	];

	protected $fillable = [
		'nombre_tutor_madres',
		'apellido_paterno_tutor',
		'apellido_materno_tutor',
		'calle',
		'numero_domicilio',
		'colonia',
		'alcaldia',
		'codigo_postal',
		'tipo_nomina_1',
		'num_empleado_1',
		'num_plaza_1',
		'clave_dependencia_1',
		'nivel_salarial_1',
		'seccion_sindical_1',
		'horario_laboral_ent',
		'horario_laboral_sal',
		'birthday',
		'Edad_menor',
		'email_correo',
		'telefono_celular',
		'telefono_3',
		'nombre_menor_1',
		'apellido_paterno_1',
		'apellido_materno_1',
		'curp_num',
		'caci',
		'terminos',
		'rol_caci',
		'correo_enviado',
		'correo_enviado_not_recibida',
		'ciclo_escolar',
		'status',
		'unidad_administrativa',
        'rfc'
	];

	public function documentos()
	{
		return $this->hasMany(Documento::class);
	}

	public function logs()
	{
		return $this->hasMany(Log::class);
	}

	public function datos_repositorio_final_pres()
	{
		return $this->hasMany(DatosRepositorioFinalPre::class);
	}

    public static function setDoc($uploadedFile, $id_inscri)
    {
        $data = [];
        $inscripcion = new InscripcionMenor();
        //verifica que exista los archivos
        if ($uploadedFile) {
            //recorre los arreglos hijos
            foreach ($uploadedFile as $value) {
                //recorre los valor del arreglo hijo
                foreach ($value as $valueNombreTramite) {

                    $siTieneRepetidos = $inscripcion->addToArrayNameFiles($uploadedFile);
                    if (!$siTieneRepetidos) {
                        //procesa el archivo
                        if (!is_string($valueNombreTramite)) {
                            //dd($valueNombreTramite);
                            $filename = time() . ' ' . $valueNombreTramite->getClientOriginalName();
                            //guarda en sistema de archivos
                            $valueNombreTramite->move('uploads/documentos', $filename);
                            //inserta en la bd
                            $data['nombre'] = $filename;
                        } else {
                            //procesa el nombre del tramite
                            //dd($valueNombreTramite);
                            $data['nombre_tramite'] = $valueNombreTramite;
                            $data['inscripcion_menor_id'] = $id_inscri;
                            $data['created_at'] = now();
                            Documento::create($data);
                        }
                    }else{
                        return false;
                    }
                }
            }
            return true;
        } else {
            return false;
        }
    }

    public function addToArrayNameFiles($uploadedFile)
    {
        $arrayDatos = [];
        $esArchivoRepetido = false;
        if ($uploadedFile) {
            //recorre los arreglos hijos
            foreach ($uploadedFile as $value) {
                //recorre los valor del arreglo hijo
                foreach ($value as $valueNombreTramite) {
                    if (!is_string($valueNombreTramite)) {

                        $arrayDatos[] = $valueNombreTramite->getClientOriginalName();


                    }
                }
            }
        }

        if (count($arrayDatos) >= 1) {
            $inscripcion = new InscripcionMenor();
            $esArchivoRepetido = $inscripcion->tieneArchivosRepetidos($arrayDatos);
            /* dd($esArchivoRepetido); */
            return $esArchivoRepetido;
        }
        return $esArchivoRepetido;
    }

    public function tieneArchivosRepetidos($arrayDatos)
    {
        for ($i = 0; $i < count($arrayDatos); $i++) {

            for ($j = 0; $j < count($arrayDatos); $j++) {
                if ($i != $j) {
                    if ($arrayDatos[$i] == $arrayDatos[$j]) {
                        /* echo "si hay elementos repetidos"; */
                        return true;
                    } else {
                        /* echo "no hay elementos repetidos"; */
                        return false;
                    }
                }
            }
        }
    }

    public static function setCicloByIdMenor($id, $ciclo_escolar)
    {
        DB::table('inscripcion_menor')
            ->where('id', $id)
            ->update(['ciclo_escolar' => $ciclo_escolar]);
    }
    public static function insertFlagEnvioEmail($id)
    {
        DB::table('inscripcion_menor')
            ->where('id', $id)
            ->update(['correo_enviado' => 1]);
    }
    public static function setCaci($id, $rolCaci)
    {
        DB::table('inscripcion_menor')
            ->where('id', $id)
            ->update(['rol_caci' => $rolCaci]);
    }


}
