<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{

    public function index()
    {
        $usuarios = DB::table('customer')
            ->orderBy('firstName', 'asc')
            ->get();
        return view('login.showusers',['customer' =>$customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('login.altausuario');
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuarios = DB::table('customer')
            ->where('CustomerCode', '=', $id)
            ->first();

        return view('login.altausuario',['customer'=>$customer ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $usuario = DB::table('customer')
            ->where('customerCode','=', $request->input('id'))
            ->update([
            'firstName' =>$request->input('Nombre'),
            'surname' =>$request->input('Apellido'),
            'address' =>$request->input('Direccion'),
            'postCode' =>$request->input('Codigo'),
            'telephoneNumber' =>$request->input('Telefono')
            ]);

        return redirect()->action('LoginController@index')
        ->with('status', 'Usuario Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = DB::table('usuarios')
            ->where('customerCode','=', $id)
            ->delete();

        return redirect()->action('LoginController@index')
        ->with('status', 'Usuario eliminado');
    }
}
