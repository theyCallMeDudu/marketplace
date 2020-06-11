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
//        $user = \App\User::find(43);
//        $user->update([
//            'name' => 'Atualizando com MASS UPDATE'
//        ]); // retorna true ou false
//        dd($user);

/////////////////////////////////////////////////////////////

    // *** Como pegar a loja de um usuário? ***
    //$user = \App\User::find(4);

    //return $user->store; // Chamando como atributo

    // dd($user->store()); // Chamando como método

    // 1:1 Retorna o objeto único (Store)
    // N:N Retorna uma Collection de dados (objetos)

    // *** Como pegar os produtos de uma loja? ***

    // return $loja->products;
    // return $loja->products()->where('id', 9)->get();
    // $loja = \App\Store::find(1);

    // *** Como pegar as lojas de uma categoria? ***
    // $categoria = \App\Category::find(1);
    // $categoria->products;

    // Criar uma loja para um usuário
//    $user = \App\User::find(10);
//    $store = $user->store()->create([
//        'name' =>'Loja Teste',
//        'description' => 'Loja Teste de produtos de informática',
//        'mobile_phone' => 'XX-XXXXX-XXXX',
//        'phone' => 'XX-XXXX-XXXX',
//        'slug' => 'loja-teste'
//    ]);

    // Criar um produto para uma loja
//    $store = \App\Store::find(41);
//    $product = $store->products()->create([
//        'name' => 'Notebook Dell',
//        'description' => 'CORE i5 10GB',
//        'body' => 'Qualquer coisa...',
//        'price'=>2999.90,
//        'slug'=>'notebook-dell',
//    ]);
//    dd($product);

    // Criar uma categoria
//    $category = \App\Category::create([
//        'name' => 'Games',
//        'description' => null,
//        'slug' => 'games',
//    ]);
//
//    $category = \App\Category::create([
//        'name' => 'Notebooks',
//        'description' => null,
//        'slug' => 'notebooks',
//    ]);

    //return \App\Category::all();

    // Adicionar um produto para uma categoria ou vice-versa
//    $product = \App\Product::find(54);
//    dd($product->categories()->attach([1]));

    // Remover um produto para uma categoria ou vice-versa
//    $product = \App\Product::find(54);
//    dd($product->categories()->detach([1])); // retorna a quantidade de itens removidos da relação N:N

    $product = \App\Product::find(54);
    dd($product->categories()->sync([2]));

    return \App\User::all();
});
