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
 * Class ReinscripcionMenor
 *
 * @property int $id
 * @property string $nombre_tutor
 * @property string $ap_paterno_t
 * @property string $ap_materno_t
 * @property string $calle
 * @property string $numero_domicilio
 * @property string $colonia
 * @property string $alcaldia
 * @property string $codigo_postal
 * @property string $tipo_nomina
 * @property string $num_empleado
 * @property string $num_plaza
 * @property string $clave_dependencia
 * @property string $nivel_salarial
 * @property string $seccion_sindical
 * @property string $horario_laboral_ent
 * @property string $horario_laboral_sal
 * @property string $email
 * @property string $telefono_uno
 * @property string $telefono_dos
 * @property string $nombre_menor
 * @property string $ap_paterno
 * @property string $ap_materno
 * @property string $fecha_nacimiento
 * @property string $edad_menor_ingreso
 * @property string $curp
 * @property string $caci
 * @property string|null $terminos
 * @property string|null $rol_caci
 * @property int|null $correo_enviado
 * @property int|null $correo_enviado_not_recibida
 * @property int|null $correo_enviado_not_recibida_reinscr
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string|null $ciclo_escolar
 * @property int $status
 * @property string|null $unidad_administrativa
 * @property string|null $rfc
 *
 * @property Collection|Documento[] $documentos
 * @property Collection|Log[] $logs
 * @property Collection|DatosRepositorioFinalRein[] $datos_repositorio_final_reins
 *
 * @package App\Model
 */
class ReinscripcionMenor extends Model
{
    protected $table = 'reinscripcion_menor';

    protected $casts = [
        'correo_enviado' => 'int',
        'correo_enviado_not_recibida' => 'int',
        'correo_enviado_not_recibida_reinscr' => 'int',
        'status' => 'int'
    ];

    protected $fillable = [
        'nombre_tutor',
        'ap_paterno_t',
        'ap_materno_t',
        'calle',
        'numero_domicilio',
        'colonia',
        'alcaldia',
        'codigo_postal',
        'tipo_nomina',
        'num_empleado',
        'num_plaza',
        'clave_dependencia',
        'nivel_salarial',
        'seccion_sindical',
        'horario_laboral_ent',
        'horario_laboral_sal',
        'email',
        'telefono_uno',
        'telefono_dos',
        'nombre_menor',
        'ap_paterno',
        'ap_materno',
        'fecha_nacimiento',
        'edad_menor_ingreso',
        'curp',
        'caci',
        'terminos',
        'rol_caci',
        'correo_enviado',
        'correo_enviado_not_recibida',
        'correo_enviado_not_recibida_reinscr',
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

    public function datos_repositorio_final_reins()
    {
        return $this->hasMany(DatosRepositorioFinalRein::class, 'inscripcion_menor_id');
    }

    public static function setDoc($uploadedFile, $id_reins)
    {
        $data = [];
        $reinscripcion = new ReinscripcionMenor();
        if ($uploadedFile) {
            //recorre los arreglos hijos
            foreach ($uploadedFile as $value) {
                //recorre los valor del arreglo hijo
                $siTieneRepetidos = $reinscripcion->addToArrayNameFiles($uploadedFile);
                if (!$siTieneRepetidos) {
                    foreach ($value as $valueNombreTramite) {
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
                            $data['reinscripcion_menor_id'] = $id_reins;
                            $data['created_at'] = now();
                            Documento::create($data);
                        }
                    }
                } else {
                    return false;
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
            $reinscripcion = new ReinscripcionMenor();
            $esArchivoRepetido = $reinscripcion->tieneArchivosRepetidos($arrayDatos);
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
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['ciclo_escolar' => $ciclo_escolar]);
    }

    public static function insertFlagEnvioEmail($id)
    {
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['correo_enviado' => 1]);
    }

    public static function setCaci($id, $rolCaci)
    {
        DB::table('reinscripcion_menor')
            ->where('id', $id)
            ->update(['rol_caci' => $rolCaci]);
    }

}
