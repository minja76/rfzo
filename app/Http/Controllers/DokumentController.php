<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Dokument;
use App\Radnik;

class DokumentController extends Controller
{
    //

    public function create($id_radnika)


    {
        return view('dokument.create')->with('id_radnika', $id_radnika);

    }
   

    public function store(Request $request)  
        {
                              
                foreach($request->file('files') as $file){
                        $filenameWithExtention=$file->getClientOriginalName();
                        $filename=pathinfo($filenameWithExtention, PATHINFO_FILENAME);
                        $extension=$file->getClientOriginalExtension();
                        $fileNameToStore=$filename.'_'.time().'.'.$extension;
                        $path=$file->storeAs('public/dokuments/'.$request->id_radnika, $fileNameToStore); 
                        
                
                        $dokument=new Dokument;
                        $dokument->name=$fileNameToStore;  
                        $dokument->id_radnika=$request->id_radnika;          
                        $dokument->save();  
                        
                }
                return redirect('/show/'.$request->id_radnika);
                
       }   
    
 

       public function destroy($id)
       {
           //

           $dokument=Dokument::find($id);
           $id_radnika=$dokument->id_radnika;
           $dokument->delete();
           return redirect('/show/'.$id_radnika);

       }

   
          
    
}

