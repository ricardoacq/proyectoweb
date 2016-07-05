<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Usuario;
use App\clientes;
use App\proyecto;
use App\requisitos;
use DB;
use App\usuarios_proyectos;
use App\proyectosrequisitos;
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
       $proyectos=DB::table('proyectos')
       ->join('clientes','proyectos.id_cliente','=','clientes.id')
       ->select('proyectos.id','proyectos.descripcion','clientes.nombre')
       ->get();
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
     public function eliminarreq($id){
             requisitos::find($id)->delete();
             return Redirect('/requisitos');
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
        public function registrarrequisito(Request $Request){
        $proyectos=proyecto::all();
        $id=$Request->input('proyectos');

            return view ('/registrarrequisito');

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
    public function guardarrequisito(Request $Request){ //request guarda la informacion para utilizarse en la BD
        $requisitos=new requisitos();
        $requisitos->descripcion=$Request->input('descripcion');
        $requisitos->prioridad=$Request->input('prioridad');
        $requisitos->horas=$Request->input('horas');
        $requisitos->save();

        return Redirect('/requisitos');
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
    public function editarreq($id){
        $requisitos=requisitos::find($id);
    return view('/editarreq', compact('requisitos'));
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
    public function actualizaproyectosrequisitos(Request $Request,$id){
      $requisitos=$Request->input('seleccionado');
      foreach ($requisitos as $r ) {
          $registro=new proyectosrequisitos();
          $registro->id_requisitos=$r;
          $registro->id_proyecto=$id;
          $registro->save();
      }
          return Redirect('/asignarusuarios');
        
    }
    public function actualizarreq(Request $Request,$id){
    $requisitos=requisitos::find($id);
    $requisitos->descripcion =$Request ->input('descripcion');
    $requisitos->prioridad =$Request ->input('prioridad');
    $requisitos->horas =$Request ->input('horas');
    $requisitos->save();
        return Redirect('/requisitos');
    }

//asignar
    public function asignarusuarios(){
    $proyectos=proyecto::all();
    return view('asignarUsuarios',compact('proyectos'));
    }
    public function requisitos(){
    $proyectos=proyecto::all();

    $requisitos=requisitos::all();
    return view('requisitos',compact('proyectos','requisitos'));

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
       public function seleccionarrequisitos(Request $Request){
        $proyectos=proyecto::all();
        $id=$Request->input('proyectos');

        $lista=DB::table('proyectos_requisitos')
        ->where('id_proyecto','=',$id)
        ->lists('id_requisitos');

        $requisitos=DB::table('requisitos')
        ->whereNotIn('id',$lista)
        ->orderBy('id','asc')
        ->get();
        return view('seleccionarrequisitos', compact('proyectos','requisitos','id'));

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
