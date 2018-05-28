<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>RFZO</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Informacije</h3>
                    </div>  

                    <div class="panel-body">
                    <div class="form-group">
                           <input type="text" class="form-control" id="search" name="search"></input>
                    </div>  
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>lbo</th>
                            <th>jmbg</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>   
                        <tbody>
                                @foreach($radnici as $radnik)
                                <tr>                                       
                                       
                                                  <td>{{$radnik->lbo}}</td>
                                                  <td>{{$radnik->jmbg}}</td>
                                                  <td>{{$radnik->ime}}</td>                                                 
                                                  <td>{{$radnik->prezime}}</td>
                                                  <td><a href="/show/{{$radnik->id}}"><button id="myInput">Pregled polisa</button></a></td>
                                                  <td> <a href="{{route('dokumentinsert', ['id' => $radnik->id])}}"><button id="myInput">Unesi dokument</button></a></td>
                                                 
                                </tr>
                                
                                @endforeach    
                                  
                        </tbody>   
                    </table>  
                    </div>  
             </div>
        </div>   
    </div>    
<script type="text/javascript">


    $('#search').on('keyup', function(){
        
                $value=$(this).val();
                $.ajax({
                    type: 'get',
                    url: '{{URL::to('searchall')}}',
                    data: {'search':$value},
                    success:function(data){
        
                        $('tbody').html(data);
                    }
                });
            })
        

</script>
</body>
</html>
    
