<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Pregled servera</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">

            <div class="row">
                                     
            </div>

            <br>


            <div class="row">
                    <a href="/"><button class="button btn-dafault">Povratak na pregled</button></a>                    
            </div>


<br>
<br>

    <div class="row">
    <div class="panel panel-default">
                            <div class="panel-heading">
                                    <h3>{{$radnik->ime}}, {{$radnik->prezime}}</h3>   
                            </div>  

              <div class="panel-body">
                      <div class="form-group">
                                
                            <h3>Polise</h3>                             
                       </div> 
                                
                                
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Datum_prijave</th>
                                                <th>Datum_odjave</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>   
                                            <tbody>
                                                    @foreach($radnik->polisas as $polisa)
                                                    <tr>                                       
                                                        
                                                            <td>{{$polisa->datum_prijave}}</td>
                                                            <td>{{$polisa->datum_odjave}}</td>                                                   
                                                            <td> <a href="{{route('dokumentinsert', ['id' => $radnik->id])}}"><button class="button btn-dafault">Unos dokumenta</button></a></td>
                                                            
                                                                    
                                                    </tr>
                                                    
                                                    @endforeach    
                                                    
                                            </tbody>   
                                        </table>  
                                    </div>  
                     <div class="panel-body">
                            <div class="form-group">
                                    <h3>Dokumenta</h3>                                
                       </div> 
                               

                    <table class="table table-bordered table-hover">
                      
                        <tbody>
                                @foreach($radnik->dokuments as $dokument)
                                <tr>                                       
                                       
                                        <td>{{$dokument->name}}</td>
                                        <td>   <h3><a href="/storage/dokuments/{{$dokument->id_radnika}}/{{$dokument->name}}" target="_blank"> {{$dokument->name}}</a></h3> </td> 
                                      <td>
                                            {!! Form::open(['action' => ['DokumentController@destroy', $dokument->id], 'method'=>'POST', 'class'=>'pull-right']) !!}
                                            {{ Form::hidden('_method', 'DELETE') }}
                                            {{ Form::submit('Obriši', ['class' =>  'btn btn-danger']) }}
                                            {!! Form::close() !!}
                                      </td>    
                                                 
                                </tr>
                                
                                @endforeach    
                                  
                        </tbody>   
                    </table>  
             </div>  
             </div>
        </div>   
    </div>    

</body>
</html>
    
