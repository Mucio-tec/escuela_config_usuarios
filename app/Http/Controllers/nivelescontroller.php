<?php

namespace documentoscontroller\Http\Controllers;
use Illuminate\Http\Request;
use documentoscontroller\Http\Requests;
use documentoscontroller\niveles;
use Validator;
use Session;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;
use documentoscontroller\Http\Requests\updateniveles;

class nivelescontroller extends Controller
{
  public function __construct()
{
    $this->middleware('auth');
}
    
        public function altaniveles(){
            $clavequesigue = niveles::all()->last()->id_niv;
         $id_niv = $clavequesigue+1;
    
        return view('altanivel',compact('id_niv') );
      
          //dd($idalum);
        } 
        public function guardanivel (Request $request){
           
            //dd( $request->all() );

            $id_niv = $request->id_niv;
            $activo = $request->activo;
            
          $this->validate($request,[
              //'id_niv'=>['required'],
              'Nivel'=>['required'],
              'activo'=>['required'],
          ]);
    
         $niveles= new niveles;
         //$niveles->id_niv=$request->id_niv;
         $niveles->activo = $activo;
         $niveles->Nivel= $request->Nivel;
         $niveles->save();
         
          
            if($niveles->save() ){
              return redirect()->route('reporteniveles')->with('exito','Nivel  dado de alta');
            }
           
        }
        
          public function reporteniveles(Request $request){
            $clavequesigue = niveles::all()->last()->id_niv;
            $lastniveles = $clavequesigue+1;
            $niveles = niveles::all();
            //dd($lastniveles);
          return view ('reporteniveles',compact('niveles','lastniveles') );
          
          
        }
        public function borranivel($id_niv)
    {       
	        $niveles= \DB:: UPDATE("update niveles set activo = 'no' where id_niv= $id_niv");
          Session::flash('exito', 'Nivel ha sido desactivo');
            return redirect()->route('reporteniveles');
    }
    public function activarnivel($id_niv)
          {
            //dd($idlu);
            /*
	          $lugares= \DB:: UPDATE("update lugares set activo = 'si' where idlu= $idlu");

            */
            $niveles = niveles::where('id_niv','=',$id_niv)->update([
              'activo'=>'si'
            ]);
            Session::flash('exito', 'Nivel ha sido activado');
            return redirect()->route('reporteniveles');

       			}
        public function editn($id){
          $editn = niveles::findOrFail($id);
          //dd($municipios);
          return view ('modificanivel',compact('editn') );
        
        }
        public function update(updateniveles $request, $id){
          $update = niveles::findOrFail($id)->update( $request->all() );
          return redirect()->route('reporteniveles')->with('exito','Nivel ha sido modificado');
      
           
        }
}


