<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Usuario;
use App\proyecto;
use DB;
use App\usuarios_proyectos;

class ejemplocontroller extends Controller
{
     public function index($nombre,$edad){
               return view ('home',compact('nombre','edad'));
            }
     public function mostrarusuarios(){
            	$usuarios= Usuario::all();
            	return view('consultarUsuarios',compact('usuarios'));
            }
     public function eliminarusuario($id){
             Usuario::find($id)->delete();
             return Redirect('/usuarios');
            }
     public function registrarusuario(){
         return view('registrarusuario');
        }
    public function guardarusuario(Request $Request){ //request guarda la informacion para utilizarse en la BD
        $usuario=new Usuario();
        $usuario->nombre=$Request->input('nombre');
        $usuario->edad=$Request->input('edad');
        $usuario->correo=$Request->input('correo');
        $usuario->save();
        return Redirect('/usuarios');
    }

    public function editarusuario($id){
        $usuario=Usuario::find($id);
    return view('/editarusuario', compact('usuario'));

    }

    public function actualizarusuario(Request $Request,$id){
    $usuario=Usuario::find($id);
    $usuario->nombre =$Request ->input('nombre');
    $usuario->edad =$Request ->input('edad');
    $usuario->correo =$Request ->input('correo');
    $usuario->save();
        return Redirect('/usuarios');
    }

    public function asignarusuarios(){
    $proyectos=proyecto::all();
    return view('asignarUsuarios',compact('proyectos'));
    }

    public function seleccionarUsuarios(Request $Request){
        $proyectos=proyecto::all();
        $id=$Request->input('proyectos');
        

        $lista=DB::table('usuarios_proyectos')
        ->where('id_proyecto','=',$id)
        ->lists('id_usuarios');

        $usuarios=DB::table('usuarios')
        ->whereNotIn('id',$lista)
        ->orderBy('id','asc')
        ->get();
        return view('seleccionarUsuarios', compact('proyectos','usuarios','id'));

    }
    public function actualizausuariosproyectos(Request $Request,$id){
      $usuarios=$Request->input('seleccionado');
      foreach ($usuarios as $u ) {
          $registro=new usuarios_proyectos();
          $registro->id_usuarios=$u;
          $registro->id_proyecto=$id;
          $registro->save();
      }
  return Redirect('/asignarusuarios');
        
    }

public function PDFproyectos($id){
     $lista=DB::table('usuarios_proyectos')
        ->where('id_proyecto','=',$id)
        ->lists('id_usuarios');

     $usuarios=DB::table('usuarios')
        ->whereIn('id',$lista)
        ->orderBy('id','asc')
        ->get();
        $proyecto=proyecto::find($id);

        $vista=view('PDFproyectos',compact('usuarios','proyecto'));
        $dompdf=\App::make('dompdf.wrapper');
        $dompdf->loadHTML($vista);
        return $dompdf->stream();
}
}
