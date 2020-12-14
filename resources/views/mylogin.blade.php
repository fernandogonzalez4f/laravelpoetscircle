@extends('layouts.master_p02')
@section('title', 'Mi primera página con Blade')
@section('header_p02')
@parent
<marquee><h2 class="title2">Esta es una página demostrativa, proximamente habra novedades que mostrar</h2></marquee>
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
<form action="{{action('PruebaController@myLogin')}}" method="get" >
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