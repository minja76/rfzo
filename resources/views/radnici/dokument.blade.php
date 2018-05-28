@extends('layouts.app')
@section('content')

<h3>Upload Photo</h3>

{!! Form::open(['action' => 'DokumentController@store', 'method'=>'POST', 'enctype'=>'multipart/form-data', 'file'=>true]) !!}
{{Form::hidden('id_radnika', $id_radnika)}}
{{Form::file('files[]', ['multiple'=>'multiple'])}}
{{Form::submit('submit')}}
{!! Form::close() !!}



@endsection('content')