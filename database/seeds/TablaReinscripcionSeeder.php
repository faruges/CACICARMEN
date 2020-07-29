<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaReinscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reinscripcion_menor')->insert([
            'nombre_tutor' => 'FELIPE DE JESUS',
            'ap_paterno_t' => 'SEGURA',
            'ap_materno_t' => 'RETANA',
            'domicilio' => 'Av. Circunvalacion Ote entre calle 33, Calle 31 y, 55450 Ecatepec de Morelos, Méx.',
            'tipo_nomina' => 'Dato no encontrado',
            'num_empleado' => '1092189',
            'num_plaza' => '19005031',
            'clave_dependencia' => 'DIRECCION GENERAL DE INFORMATICA',
            'nivel_salarial' => '29',
            'seccion_sindical' => 'Dato no encontrado',
            'horario_laboral_ent' => '15:21',
            'horario_laboral_sal' => '18:21',
            'email' => 'fseguradf@hotmail.com',
            'telefono_uno' => '5545874921',
            'telefono_dos' => '5545314349',
            'matricula' => 'Mat879523',
            'nombre_menor' => 'RUBEN',
            'ap_paterno' => 'PEREZ',
            'ap_materno' => 'ROMAN',
            'fecha_nacimiento' => '04/05/1998',
            'edad_menor_ingreso' => '9',
            'curp' => 'COPJ931004HMCRRS04',
            'caci' => 'LUZ MARIA GOMEZ PEZUELA',
        ]);
        DB::table('reinscripcion_menor')->insert([
            'nombre_tutor' => 'DIEGO EDUARDO',
            'ap_paterno_t' => 'RODRIGUEZ',
            'ap_materno_t' => 'MENDEZ',
            'domicilio' => 'Av. Circunvalacion Ote entre calle 33, Calle 31 y, 55450 Ecatepec de Morelos, Méx.',
            'tipo_nomina' => 'Dato no encontrado',
            'num_empleado' => '1092192',
            'num_plaza' => '19005028',
            'clave_dependencia' => 'DIRECCION GENERAL DE INFORMATICA',
            'nivel_salarial' => '29',
            'seccion_sindical' => 'Dato no encontrado',
            'horario_laboral_ent' => '15:21',
            'horario_laboral_sal' => '18:21',
            'email' => 'fsegudf@gmail.com',
            'telefono_uno' => '5545874921',
            'telefono_dos' => '5545314349',
            'matricula' => 'Mat879523',
            'nombre_menor' => 'RUBEN',
            'ap_paterno' => 'PEREZ',
            'ap_materno' => 'ROMAN',
            'fecha_nacimiento' => '04/05/1998',
            'edad_menor_ingreso' => '9',
            'curp' => 'COPJ931004HMCRRS04',
            'caci' => 'LUZ MARIA GOMEZ PEZUELA',
        ]);
        DB::table('reinscripcion_menor')->insert([
            'nombre_tutor' => 'DANIEL',
            'ap_paterno_t' => 'SALAS',
            'ap_materno_t' => 'GONZALEZ',
            'domicilio' => 'Av. Circunvalacion Ote entre calle 33, Calle 31 y, 55450 Ecatepec de Morelos, Méx.',
            'tipo_nomina' => 'Dato no encontrado',
            'num_empleado' => '1092192',
            'num_plaza' => '19005028',
            'clave_dependencia' => 'DIRECCION GENERAL DE INFORMATICA',
            'nivel_salarial' => '29',
            'seccion_sindical' => 'Dato no encontrado',
            'horario_laboral_ent' => '15:21',
            'horario_laboral_sal' => '18:21',
            'email' => 'fsegadf@hotmail.com',
            'telefono_uno' => '5545874921',
            'telefono_dos' => '5545314349',
            'matricula' => 'Mat879523',
            'nombre_menor' => 'RUBEN',
            'ap_paterno' => 'PEREZ',
            'ap_materno' => 'ROMAN',
            'fecha_nacimiento' => '04/05/1998',
            'edad_menor_ingreso' => '9',
            'curp' => 'COPJ931004HMCRRS04',
            'caci' => 'LUZ MARIA GOMEZ PEZUELA',
        ]);
    }
}
