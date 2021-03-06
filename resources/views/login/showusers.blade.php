@extends('layouts.master_p02')
@section('title', 'Mostrar Usuarios')
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
<div style="align-content: center"><a href="{{action('LoginController@create')}}"> Agregar nuevo registro <img src="{{url('/images/agregar-archivo.png')}}"></a></div>
        <br>
        {{$status ?? '' }}
    <hr>
    <table class="table table-hover table-dark">
        <thead>
            <tr>
                <th scope="col">idCustomer</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Direccion</th>
                <th scope="col">Codigo</th>
                <th scope="col">Telefono</th>
                <th scope="col">Actualizar</th>
                <th scope="col">Borrar</th>
            </tr>
        </thead>
        <tbody>
        @foreach($customers as $firstName)
        <tr>
            <th scope="row">{{$firstName->customerCode}}</th>
            <td>{{$firstName->firstName}}}}</td>
            <td>{{$surname->surname}}</td>
            <td>{{$address->address}}</td>
            <td>{{$postCode->postCode}}</td>
            <td>{{$telephoneNumber->telephoneNumber}}</td>
            <td><a href="{{action('LoginController@show', ['id'=>$user->idUsuario])}}">
                    <img src="{{url(/images/actualizar.png)}}"></a></td>
            <td><a href="{{action('LoginController@destroy' , ['id'=>$user->idUsuario])}}"></a>
                <img src="{{url(/images/delete.png)}}"></td>
        </tr>
        @endforeach
        </tbody>
    </table>
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
