<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Http\Requests\AlumnoRequest;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\AlumnoResource;
use Illuminate\Http\Resources\Json\JsonResource;

class AlumnoController extends Controller
{
    /**
     * Devuelve una lista de alumnos.
     */
    public function index(): JsonResource//JsonResponse
    {
        // $alumnos = Alumno::all();//Obtiene todos los alumnos de la base de datos
        //return response()->json($alumnos, 200);//Devuelve la lista de alumnos en formato JSON
        return AlumnoResource::collection(Alumno::all());
    }

    /**
     * Almacena un nuevo alumno en la base de datos.
     */
    public function store(AlumnoRequest $request): JsonResponse
    {
        $alumno = Alumno::create($request->all());//Crea un nuevo alumno en la base de datos
        return response()->json([
            'success' => true,
            'data' => new AlumnoResource($alumno)], 201);
    }

    /**
     * Devuelve un alumno por su id.
     */
    public function show(string $id): JsonResource
    {
        $alumno = Alumno::find($id);
        //return response()->json($alumno, 200);
        return new AlumnoResource($alumno);
    }

    /**
     * Actualiza un alumno por su id.
     */
    public function update(AlumnoRequest $request, string $id)
    {
        $alumno = Alumno::find($id);
        $alumno->nombre = $request->nombre;
        $alumno->apellidos = $request->apellidos;
        $alumno->email = $request->email;
        $alumno->telefono = $request->telefono;
        $alumno->direccion = $request->direccion;
        $alumno->save();
        
        //otra forma mas sensilla sería:
        //$alumno->update($request->all());
        return response()->json([
            'success' => true,
            'data'=>new AlumnoResource($alumno)], 200);
    }

    /**
     * Elimina un alumno por su id.
     */
    public function destroy(string $id): JsonResponse
    {
        //Alumno::destroy($id);//Elimina un alumno por su id

        Alumno::find($id)->delete();
        return response()->json(['success' => true], 200);
    }
}
