@extends('layouts.app')

@section('content')

    <h2>Cadastrar produto</h2>

    <form action="{{route('admin.products.store')}}" method="post">
        @csrf
        <div class="form-group">
            <lable>Nome Produto</lable>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
            <lable>Descrição</lable>
            <input type="text" name="description" class="form-control">
        </div>

        <div class="form-group">
            <lable>Conteúdo</lable>
            <textarea name="body" id="" cols="30" rows="10" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <lable>Preço</lable>
            <input type="text" name="price" class="form-control">
        </div>

        <div class="form-group">
            <lable>Slug</lable>
            <input type="text" name="slug" class="form-control">
        </div>

        <div class="form-group">
            <lable>Lojas</lable>
            <select name="store" class="form-control">
                @foreach($stores as $store)
                    <option value="{{$store->id}}">{{$store->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success ">Criar produto</button>
        </div>

    </form>

@endsection
