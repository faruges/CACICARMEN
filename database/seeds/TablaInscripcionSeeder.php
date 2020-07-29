<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TablaInscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('inscripcion_menor')->insert([
            'nombre_tutor_madres' => 'FELIPE DE JESUS',
            'apellido_paterno_tutor' => 'SEGURA',
            'apellido_materno_tutor' => 'RETANA',
            'domicilio_delegracion' => 'Av. Circunvalacion Ote entre calle 33, Calle 31 y, 55450 Ecatepec de Morelos, Méx.',
            'tipo_nomina_1' => 'Dato no encontrado',
            'num_empleado_1' => '1092189',
            'num_plaza_1' => '19005031',
            'clave_dependencia_1' => 'DIRECCION GENERAL DE INFORMATICA',
            'nivel_salarial_1' => '29',
            'seccion_sindical_1' => 'Dato no encontrado',
            'birthday' => '04/10/1993',
            'Edad_menor' => '7 MESES',
            'email_correo' => 'fsegurasdf@hotmail.com',
            'telefono_celular' => '5545874921',
            'telefono_3' => '5545314349',
            'nombre_menor_1' => 'JESUS RAFAEL',
            'apellido_paterno_1' => 'CORTES',
            'apellido_materno_1' => 'PEREZ',
            'curp_num' => 'COPJ931004HMCRRS04',
            'caci' => 'LUZ MARIA GOMEZ PEZUELA',
        ]);
        DB::table('inscripcion_menor')->insert([
            'nombre_tutor_madres' => 'DIEGO EDUARDO',
            'apellido_paterno_tutor' => 'RODRIGUEZ',
            'apellido_materno_tutor' => 'MENDEZ',
            'domicilio_delegracion' => 'Av. Circunvalacion Ote entre calle 33, Calle 31 y, 55450 Ecatepec de Morelos, Méx.',
            'tipo_nomina_1' => 'Dato no encontrado',
            'num_empleado_1' => '1092192',
            'num_plaza_1' => '19005028',
            'clave_dependencia_1' => 'DIRECCION GENERAL DE INFORMATICA',
            'nivel_salarial_1' => '29',
            'seccion_sindical_1' => 'Dato no encontrado',
            'birthday' => '04/10/1993',
            'Edad_menor' => '7 MESES',
            'email_correo' => 'fseguraf@hotmail.com',
            'telefono_celular' => '5545874921',
            'telefono_3' => '5545314349',
            'nombre_menor_1' => 'JESUS RAFAEL',
            'apellido_paterno_1' => 'CORTES',
            'apellido_materno_1' => 'PEREZ',
            'curp_num' => 'COPJ931004HMCRRS04',
            'caci' => 'LUZ MARIA GOMEZ PEZUELA',
        ]);
        DB::table('inscripcion_menor')->insert([
            'nombre_tutor_madres' => 'DANIEL',
            'apellido_paterno_tutor' => 'SALAS',
            'apellido_materno_tutor' => 'GONZALEZ',
            'domicilio_delegracion' => 'Av. Circunvalacion Ote entre calle 33, Calle 31 y, 55450 Ecatepec de Morelos, Méx.',
            'tipo_nomina_1' => 'Dato no encontrado',
            'num_empleado_1' => '1082159',
            'num_plaza_1' => '19005032',
            'clave_dependencia_1' => 'DIRECCION GENERAL DE INFORMATICA',
            'nivel_salarial_1' => '25',
            'seccion_sindical_1' => 'Dato no encontrado',
            'birthday' => '04/10/1993',
            'Edad_menor' => '7 MESES',
            'email_correo' => 'fsecureraf@gmail.com',
            'telefono_celular' => '5545874921',
            'telefono_3' => '5545314349',
            'nombre_menor_1' => 'JESUS RAFAEL',
            'apellido_paterno_1' => 'CORTES',
            'apellido_materno_1' => 'PEREZ',
            'curp_num' => 'COPJ931004HMCRRS04',
            'caci' => 'LUZ MARIA GOMEZ PEZUELA',
        ]);
    }
}
