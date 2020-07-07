@extends('layouts.app')

@section('content')

    <h2>Editar loja</h2>

    <form action="{{route('admin.stores.update', ['store' => $store->id])}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <lable>Nome Loja</lable>
            <input type="text" name="name" class="form-control" value="{{$store->name}}">
        </div>

        <div class="form-group">
            <lable>Descrição</lable>
            <input type="text" name="description" class="form-control" value="{{$store->description}}">
        </div>

        <div class="form-group">
            <lable>Telefone</lable>
            <input type="text" name="phone" class="form-control" value="{{$store->phone}}">
        </div>

        <div class="form-group">
            <lable>Celular</lable>
            <input type="text" name="mobile_phone" class="form-control" value="{{$store->mobile_phone}}">
        </div>

        <div class="form-group">
            <lable>Slug</lable>
            <input type="text" name="slug" class="form-control" value="{{$store->slug}}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success ">Atualizar loja</button>
        </div>

    </form>

@endsection
