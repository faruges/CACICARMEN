<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Inscripcion extends Model
{
    protected $table = 'inscripcion_menor';
    protected $fillable = [
        'rfc', 'nombre_tutor_madres', 'apellido_paterno_tutor', 'apellido_materno_tutor',
        'calle', 'numero_domicilio', 'colonia', 'alcaldia', 'codigo_postal', 'tipo_nomina_1', 'num_empleado_1', 'num_plaza_1', 'clave_dependencia_1', 'nivel_salarial_1', 'seccion_sindical_1',
        'email_correo', 'telefono_celular', 'telefono_3', 'horario_laboral_ent', 'horario_laboral_sal',
        'nombre_menor_1', 'apellido_paterno_1', 'apellido_materno_1', 'curp_num', 'birthday', 'Edad_menor', 'caci', 'correo_enviado', 'terminos', 'status', 'ciclo_escolar',
        'unidad_administrativa', 'created_at'
    ];
    protected $guarded = ['id'];
    public $timestamps = true;

    public static function setDoc($uploadedFile, $id_inscri)
    {
        $data = [];
        $inscripcion = new Inscripcion();
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
                            Documentos::create($data);
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
            $inscripcion = new Inscripcion();
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
