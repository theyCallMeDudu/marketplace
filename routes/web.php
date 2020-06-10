<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $fruta = 'uva';

    return view('welcome', compact('fruta'));
});

Route::get('/model', function(){
    //$products = \App\Product::all();

    // Active Record
//    $user = new \App\User();
//    $user->name = 'Usuário Teste';
//    $user->email = 'email@teste.com';
//    $user->password = bcrypt('12345678');
//    $user->save();

    // return \App\User::all(); -> ** retorna todos os usuários.
    // return \App\User::find(3); -> ** retorna um usuário com base no id passado.
    // return \App\User::where('name', 'Fulano de Tal')->get(); -> ** retorna (select * from users where name = 'Fulano
    // de Tal')
    // return \App\User::paginate(10); -> ** paginar dados com Laravel

    // Mass Assignment - Atribuição em massa
//    $user = \App\User::create([
//        'name' => 'Fulaninho de Tal',
//        'email' => 'fulaninho@detal.com',
//        'password' => bcrypt('12345678')
//    ]);
//    dd($user);

    // Mass Update - Atualização em massa
        $user = \App\User::find(43);
        $user->update([
            'name' => 'Atualizando com MASS UPDATE'
        ]); // retorna true ou false
        dd($user);

    return \App\User::all();
});
