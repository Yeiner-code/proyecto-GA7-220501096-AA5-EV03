<?php

namespace App\Http\Controllers;

use App\Models\Curso; // Asegúrate de que la clase esté importada y el nombre sea correcto
use Illuminate\Http\Request;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Curso::all(); // Asegúrate de que el nombre de la clase sea correcto
        // return $course;

        return view('cursos.index', compact('course'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Curso(); // Asegúrate de que el nombre de la clase sea correcto
        $course->nombre = $request->input('nombre');
        $course->descripcion = $request->input('descripcion');

        if ($request->hasFile('imagen')) { // Corrige el método a hasFile
            $course->imagen = $request->file('imagen')->store('public/cursos');
        }

        $course->save();

        return 'Guardado Exitoso';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $course = Curso::find($id); // Asegúrate de que el nombre de la clase sea correcto
        return view('cursos.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Curso::find($id);
        return view('cursos.edit',compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
// Encuentra el curso por ID
$course = Curso::find($id);

if (!$course) {
    return redirect()->route('cursos.index')->with('error', 'Curso no encontrado');
}

// Valida los datos del formulario
$request->validate([
    'nombre' => 'required|string|max:255',
    'descripcion' => 'required|string',
]);

// Actualiza los campos del curso
$course->nombre = $request->input('nombre');
$course->descripcion = $request->input('descripcion');

// Guarda los cambios en la base de datos
$course->save();

// Redirige a la vista del curso
return redirect()->route('cursos.show', $course->id)
                 ->with('success', 'Curso actualizado correctamente');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Aquí puedes agregar la lógica para eliminar un curso
    }
}

