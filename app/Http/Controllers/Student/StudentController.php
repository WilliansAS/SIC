<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;

class StudentController extends Controller
{
    public function index(){
        return view('formulario');
    }

    public function store(StudentRequest $request){
        return 'Formulario procesado';
    }
}
