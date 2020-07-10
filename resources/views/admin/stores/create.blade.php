@extends('layouts.app')

@section('content')

    <h2>Criar loja</h2>

    <form action="{{route('admin.stores.store')}}" method="post">
        @csrf
        <div class="form-group">
            <lable>Nome Loja</lable>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}">
        </div>

        @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
        @enderror

        <div class="form-group">
            <lable>Descrição</lable>
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror" value="{{old('description')}}">
        </div>

        @error('description')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror

        <div class="form-group">
            <lable>Telefone</lable>
            <input type="text" name="phone" class="form-control @error('phone') is-invalid @enderror" value="{{old('phone')}}">
        </div>

        @error('phone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror

        <div class="form-group">
            <lable>Celular</lable>
            <input type="text" name="mobile_phone" class="form-control @error('mobile_phone') is-invalid @enderror" value="{{old('mobile_phone')}}">
        </div>

        @error('mobile-phone')
        <div class="invalid-feedback">
            {{$message}}
        </div>
        @enderror

        <div class="form-group">
            <lable>Slug</lable>
            <input type="text" name="slug" class="form-control">
        </div>

        <div class="form-group">
            <lable>Usuário</lable>
            <select name="user" class="form-control">
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success ">Criar loja</button>
        </div>

    </form>

@endsection
