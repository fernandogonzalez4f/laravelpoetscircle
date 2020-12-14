@extends('layouts.master')
@section('title', 'Hola mundo')
@section('header')
    @parent
<marquee>Hola</marquee>
@stop
@section('navbar')
<ul>
<li>Link 1</li>
<li>Link 2</li>
<li>Link 3</li></ul>
@stop
@section('contenido') 
    <form action="{{action('PruebaController@validarLogin')}}" method="get" >
    {{csrf_field()}}
    <label for="user">Usuario</label>
    <input type="text" name="user">
    <br>
    <label for="password">Password</label>
    <input type="password" name="password">
    <br>
    <label for="key">Key</label>
    <input type="text" name="key">
    <br>
    <input type="submit" value="submit">
    </form>
    @stop
@section('footer')
     Derechos reservados @parent
@stop
