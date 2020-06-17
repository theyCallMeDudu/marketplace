@extends('layouts.app')

@section('content')

    <h2>Editar produto</h2>

    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="post">
        @csrf
        @method("PUT")

        <div class="form-group">
            <lable>Nome Produto</lable>
            <input type="text" name="name" class="form-control" value="{{$product->name}}">
        </div>

        <div class="form-group">
            <lable>Descrição</lable>
            <input type="text" name="description" class="form-control" value="{{$product->description}}">
        </div>

        <div class="form-group">
            <lable>Conteúdo</lable>
            <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$product->body}}</textarea>
        </div>

        <div class="form-group">
            <lable>Preço</lable>
            <input type="text" name="price" class="form-control" value="{{$product->price}}">
        </div>

        <div class="form-group">
            <lable>Slug</lable>
            <input type="text" name="slug" class="form-control" value="{{$product->slug}}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success ">Atualizar produto</button>
        </div>

    </form>

@endsection
