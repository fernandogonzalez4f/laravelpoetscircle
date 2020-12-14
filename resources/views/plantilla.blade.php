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
    'El miercoles examen'<br>
    {{$dato}}
    <center><img src="/images/laravel_logo.png" alt="Laravel Logo"></center>
    @stop
@section('footer')
     Derechos reservados @parent
@stop
