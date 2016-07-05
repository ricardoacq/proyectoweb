<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Usuario;
use App\clientes;
use App\proyecto;
use DB;
use App\usuarios_proyectos;

class ejemplocontroller extends Controller
{
  //muestra listas
     public function index($nombre,$edad){
               return view ('home',compact('nombre','edad'));
            }
     public function mostrarusuarios(){
            	$usuarios= Usuario::all();
            	return view('consultarUsuarios',compact('usuarios'));
            }

     public function consultarclientes(){
        $clientes=clientes::all();
        return view('consultarclientes',compact('clientes'));
            }           

     public function consultarproyectos(){
       $proyectos=proyecto::all();
          return view('consultarproyectos',compact('proyectos'));
            }

// elimina
     public function eliminarusuario($id){
             Usuario::find($id)->delete();
             return Redirect('/usuarios');
            }
     public function eliminarcliente($id){
             clientes::find($id)->delete();
             return Redirect('/consultarclientes');
            }
     public function eliminarproyecto($id){
             proyecto::find($id)->delete();
             return Redirect('/consultarproyectos');
            }

//registrar nuevo
        public function registrarusuario(){
         return view('registrarusuario');
        }
        public function registrarcliente(){
         return view('registrarcliente');
        }
        public function registrarproyecto(){
         return view('registrarproyecto');
        }

//guardar cambios        
    public function guardarusuario(Request $Request){ //request guarda la informacion para utilizarse en la BD
        $usuario=new Usuario();
        $usuario->nombre=$Request->input('nombre');
        $usuario->edad=$Request->input('edad');
        $usuario->correo=$Request->input('correo');
        $usuario->save();
        return Redirect('/usuarios');
    }
    public function guardarcliente(Request $Request){ //request guarda la informacion para utilizarse en la BD
        $clientes=new clientes();
        $clientes->nombre=$Request->input('nombre');
        $clientes->telefono=$Request->input('telefono');
        $clientes->correo=$Request->input('correo');
        $clientes->save();
        return Redirect('/consultarclientes');
    }
    public function guardarproyecto(Request $Request){ //request guarda la informacion para utilizarse en la BD
        $proyectos=new proyecto();
        $proyectos->descripcion =$Request ->input('descripcion');
        $proyectos->id_cliente =$Request ->input('id_cliente');
        $proyectos->save();
        return Redirect('/consultarclientes');
    }


//editar
    public function editarusuario($id){
        $usuario=Usuario::find($id);
    return view('/editarusuario', compact('usuario'));
    }
    public function editarcliente($id){
        $clientes=clientes::find($id);
    return view('/editarcliente', compact('clientes'));
    }
     public function editarproyecto($id){
        $proyectos=proyecto::find($id);
    return view('/editarproyecto', compact('proyectos'));
    }

//actualizar
    public function actualizarusuario(Request $Request,$id){
    $usuario=Usuario::find($id);
    $usuario->nombre =$Request ->input('nombre');
    $usuario->edad =$Request ->input('edad');
    $usuario->correo =$Request ->input('correo');
    $usuario->save();
        return Redirect('/usuarios');
    }
     public function actualizarcliente(Request $Request,$id){
    $clientes=clientes::find($id);
    $clientes->nombre =$Request ->input('nombre');
    $clientes->telefono =$Request ->input('telefono');
    $clientes->correo =$Request ->input('correo');
    $clientes->save();
        return Redirect('/consultarclientes');
    }
     public function actualizarproyecto(Request $Request,$id){
    $proyectos=proyecto::find($id);
    $proyectos->descripcion =$Request ->input('descripcion');
    $proyectos->id_cliente =$Request ->input('id_cliente');
    $proyectos->save();
        return Redirect('/consultarproyectos');
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

//asignar
    public function asignarusuarios(){
    $proyectos=proyecto::all();
    return view('asignarUsuarios',compact('proyectos'));
    }

//seleccionar
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
   
//generar PDF
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
        return $dompdf->stream();}

}
