<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       /* $students = Student::all(); */
        $students = Student::paginate(10);
        return view('students', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request){
        {
             // Validar los datos del formulario
        $validated = $request->validate([
            'name_student' => 'required|max:255',
            'lastname_student' => 'required|max:255',
            'id_student' => 'required|unique:students|max:10',
            'birthday' => 'required|date',
            'comments' => 'nullable|string|max:1000',
        ]);

        // Crear un nuevo estudiante con los datos validados
        $student = new Student();
        $student->name_student = $validated['name_student'];
        $student->lastname_student = $validated['lastname_student'];
        $student->id_student = $validated['id_student']; // Asegúrate de que el nombre de la columna en la base de datos coincida
        $student->birthday = $validated['birthday'];
        $student->comments = $validated['comments'] ?? ''; // Usa el operador null coalesce en caso de que el comentario sea nulo
        $student->save();

        // Redireccionar a alguna ruta, por ejemplo, a la lista de estudiantes con un mensaje de éxito
        return redirect()->route('estudiantes.index')->with('success', 'Estudiante agregado con éxito.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //Comsulta Eloquent
        $student = Student::find($id);
        return view('show-student', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $student = Student::find($id);
        return view('edit-student', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StudentRequest $request, $id)
    {
        $student = Student::find($id);
        $student->update($request->all());

        return redirect()->route('estudiantes')->with('notificacion', 'Estudiante modificado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
