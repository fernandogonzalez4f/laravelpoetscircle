@extends('layouts.master')
@section('title', 'Detalle Usuario')
@section('header')
    @parent
@stop
@section('navbar')
    @parent
@stop

@section('contenido')
<div>Agregar nuevo registro</div>
<hr> 
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">usuario</th>
      <th scope="col">password</th>
      <th scope="col">llave</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Borrar</th>
    </tr>
  </thead>
  <tbody>
  @foreach($usuarios as $user)
    <tr>
      <th scope="row">{{$user->idUsuario}}</th>
      <td>{{$user->user}}</td>
      <td>{{$user->password}}</td>
      <td>{{$user->key}}</td>
      <td></td>
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>
    @stop
@section('footer')
     Derechos reservados @parent
@stop