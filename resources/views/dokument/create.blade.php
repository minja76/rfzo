<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Pregled servera</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">

<h3>Unesi dokument</h3>

{!! Form::open(['action' => 'DokumentController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'file'=>true]) !!}
{{Form::hidden('id_radnika', $id_radnika)}}
{{Form::file('files[]', ['multiple'=>'multiple'])}}
{{Form::submit('Zapamti')}}
{!! Form::close() !!}



<form action="/dokument/store"  'method'='POST'>
        <input value="{{$id_radnika}}"  type="hidden">
    <input style="display: none; visibility: hidden;" id="myFileInput" type="file">
 
    <button type="button" onclick="$('#myFileInput').trigger('click');">Custom Text</button>

    <input  type="submit" value="Zapamti">
    
  </form>


</body>
</html>
    