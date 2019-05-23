<?php

use Illuminate\Http\Request;
use App\Empleado;

//listar los empleoados

Route::get('empleados',function(){
	$empleados=Empleado::get();//devuelve todos los registros de la tabla empleaods
	return $empleados;
});

//Crear los empleados
Route::post('empleados',function(Request $request){
	/*$request->validate([
		'nombres'=>'required|max:50',
		'apellido'=>'required|max:50',
		'cedula'=>'required|max:20',
		'email'=>'required|max:50|unique:empleados',
		'lugar_nacimiento'=>'required|max:50',
		'sexo'=>'required|max:50',
		'estado_civil'=>'required|max:50',
		'telefono'=>'required|numeric|max:50'
	]);

	$empleado=new Empleado;
	$empleado->nombre=$request->input('nombres');
	$empleado->apellido=$request->input('apellido');
	$empleado->cedula=$request->input('cedula');
	$empleado->email=$request->input('email');
	$empleado->lugar_nacimiento=$request->input('lugar_nacimiento');
	$empleado->sexo=$request->input('sexo');
	$empleado->estado_civil=$request->input('estado_civil');
	$empleado->telefono=$request->input('telefono');
	$empleado->save();
	return "usuarios creados";*/
});
Route::put('empleados/{id}',function(Request $request,$id){
	$empleado=Empleado::findOrFail($id);
	return $empleado;
});