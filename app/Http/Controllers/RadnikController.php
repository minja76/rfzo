<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use DB;
use App\Radnik;
use App\Polisa;
use App\Input;

class RadnikController extends Controller
{
    // 


    public function searchall(Request $request) {

           if ($request->ajax())
      
            {
                
                    $output="";
            
                    $radnici=Radnik::where('ime', 'like','%'.$request->search.'%')
                                                ->orWhere('prezime', 'like','%'.$request->search.'%')
                                                ->orWhere('lbo', 'like','%'.$request->search.'%')
                                                ->orWhere('jmbg', 'like','%'.$request->search.'%')->get();
              if($radnici)
              {
                    foreach($radnici as $key=>$radnik)
                    {
                        $output.='<tr>'.
                                '<td>'.$radnik->lbo.'</td>'.
                                '<td>'.$radnik->jmbg.'</td>'.
                                '<td>'.$radnik->ime.'</td>'.                                                  
                                '<td>'.$radnik->prezime.'</td>'.
                                '<td><a href="/show/'.$radnik->id.'"><button id="myInput">Pregled polisa</button></a></td>'.
                                '<td><a href="/dokument/create/'.$radnik->id.'"><button id="myInput">Unesi dokument</button></a></td>'.
                                '</tr>';
            
                    }
      
                             return Response($output);
                   }
             }

              else{
                  $radnici=Radnik::all();
                  return view('radnici.searchall')->withRadnici($radnici);

             }
  }

  
  
  public function show($id){


      $radnik=Radnik::find($id);
      return view('radnici.show')->withRadnik($radnik);
  }


  public function dokument($id){
    
    
          $radnik=Radnik::find($id);
          return view('radnici.dokument')->withRadnik($radnik);
      }
    
    
      public function storedokument($id){
        
        
              $radnik=Radnik::find($id);
              return view('radnici.dokument')->withRadnik($radnik);
          }


        // public static function incomplete (){

        //    return static::where('completed', 0)->get();
        // }
    


          public  function scopeIncomplete ($query){               //Task::incomplete()
            
                        return $query->where('completed', 0);
                     }
}
 