@extends('layouts.master_p02')
@section('header_p02')
@section('title')
   @if((isset($customers)) and (is_object($customers)))
    Modificacion de Datos de Usuario
    @php
        $title1='Modificacion de Datos de Usuario';
         $firstName= $customers->firstName;
         $surname=$customers->surname;
         $address=$customers->address;
         $postCode=$customers->postCode;
         $telephoneNumber=$customers->telephoneNumber;
         $customerCode=$customers->customerCode;
       @endphp
    @endphp
   @else
       Alta de un Usuario Nuevo
       @php
           $title1='Alta de un Usuario Nuevo';
            $firstName='';
            $surname='';
            $address='';
            $postCode='';
            $telephoneNumber='';
            $customerCode='';
       @endphp
    @endif
@stop
@section('navbar_p02')
<a class="navbar-brand" href="#"><h3>Laravel</h3></a>
<ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#"><h3>Inicio</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><h3>Novedades</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><h3>Los más vistos</h3></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><h3>Acerca de</h3></a>
    </li>
  </ul>
@stop
@section('contenido_p02')
<article class="background2">
<div>{{$title1}}</div>
  <hr> 
  <form action="{{isset($customers) ? action('LoginController@update') : action('LoginController@save')}}" method="post" >
    {{csrf_field()}}
    @if((isset($customers)) and (is_object($customers)))
        <input type="hidden" name="id" value="{{$customerCode}}">
    @endif
    <label for="firstName">Nombre</label>
    <input type="text" name="nombre" value="{{$firstName}}">
    <br>
    <label for="surname">Apellido</label>
    <input type="text" name="apellido" value="{{$surname}}">
    <br>
    <label for="address">Direccion</label>
    <input type="text" name="direccion" value="{{$address}}">
    <br>
    <label for="postCode">Codigo</label>
    <input type="text" name="codigo" value="{{$postCode}}">
    <br>
    <label for="telephoneNumber">Telefono</label>
    <input type="text" name="telefono" value="{{$telephoneNumber}}">
    <input type="submit" value="submit">
  </form>
</article>
<center><img src="/images/Sticker Mario.png" alt="Sticker Mario" width=200></center>
@stop
@section('sidebar')
  <a href="#">Inicio</a>
  <a href="#">Novedades</a>
  <a href="#">Los mas vistos</a>
  <a href="#">Configuración</a>
  <a href="#">Acerca de</a>
  <img src="/images/galaxya50.jpg" alt="Galaxy A50" width= 190>
  <img src="/images/computadora.png" alt="Computadora" width= 190>
  <img src="/images/audifonos.jpg" alt="Audifonos" width= 190>
@stop
@section('footer_p02')
     <center><h3>Copyright Fernando Gonzalez Gallegos 5°F</h3></center> @parent
@stop