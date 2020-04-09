<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;






class NotesController extends Controller
{
   public function getIndex(){

    //ESTE METODO CONSIGUE TODAS LAS NOTAS
     $notes= DB::table('notes')->orderBy('id','desc')->get();
    // foreach($notas as $note){

    //     echo $note->title."<br>";
    // }


    return view('notes.index',array(

        "notes" => $notes
    ));
   }

   //ESTE METODO MUESTRA UNA NOTA
   public function getNote($id){
   
     $note = DB::table('notes')->select('id','title','description')->where('id',$id)->first();
    //  var_dump($note);

     //opcion si el valor no esta
    if(empty($note)){
    
         return redirect()->action('NotesController@getIndex');

    }

     return view('notes.note',array(

        "note" => $note
    ));
   }

   public function postNote (Request $request){
     $note = DB::table('notes')->insert(array(
         'title' => $request->input('title'),
         'description' => $request ->input('description')

      ));

     
      //si esta todo correcto
       return redirect()->action('NotesController@getIndex');

      
   }

   public function getSaveNote(){

    return view('notes.saveNote');

   }

   //ESTE METODO ELIMINA UNA NOTA
   public function getDeleteNote($id){
   
    $note = DB::table('notes')->where('id',$id)->delete();


    return redirect()->action('NotesController@getIndex')->with('status','Nota borrada correctamente');
  }

  public function postUpdateNote ($id, Request $request )
  {
     $note = DB::table('notes')->where('id',$id)->update(array(
     
        'title' => $request->input('title'),
        'description' => $request -> input('description')


     ));

     return redirect()->action('NotesController@getIndex')->with('status','Nota actualizada correctamente');
  }

  public function getUpdateNote ($id){

  $note =DB::table('notes')->where('id',$id)->first();

  return view('notes.saveNote', array(

     'note' => $note


  ));

  }
}


