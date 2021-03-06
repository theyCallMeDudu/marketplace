@extends('layouts.app')

@section('content')

    <div class="text-center mb-3">
        <a href="{{route('admin.stores.create')}}" class="btn btn-success">Cadastrar</a>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Loja</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stores as $store)
            <tr>
                <td>{{$store->id}}</td>
                <td>{{$store->name}}</td>
                <td>
                    <a href="{{route('admin.stores.edit', ['store' => $store->id])}}" class="btn btn-sm btn-primary">
                        Editar
                    </a>

                    <div class="btn-group">
                        <form action="{{route('admin.stores.destroy', ['store' => $store->id])}}" method="post">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-sm btn-danger">
                                Excluir
                            </button>
                        </form>
                    </div>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{$stores->links()}}
@endsection
