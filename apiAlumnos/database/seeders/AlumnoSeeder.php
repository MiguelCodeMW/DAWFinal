<?php
namespace Database\Seeders;
use App\Models\Alumno; 
use Illuminate\Database\Seeder;

class AlumnoSeeder extends Seeder
{
    /**
     * Ejecuta los seeders en la base de datos
     */
    public function run(): void
    {
/*         Alumno::create([
            'nombre' => "Nombre1",
            'apellidos' => "Apellido apellido",
            'email' => "prueba@gmail.com",
            'telefono' => 957112233,
            'direccion' => 'Calle direccion 132, 9a'
        ]);

        */
        //Genera 20 alumnos de prueba con datos reales.
        Alumno::factory()->count(20)->create();
    }
}
