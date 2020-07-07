@extends('layouts.app')

@section('content')

    <div class="text-center mb-3">
        <a href="{{route('admin.products.create')}}" class="btn btn-success">Cadastrar produto</a>
    </div>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Nome</th>
{{--                <th>Loja</th>--}}
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $p)

            <tr>
                <td>{{$p->id}}</td>
                <td>{{$p->name}}</td>
{{--                <td>{{$store->name}}</td>--}}
                <td>R$ {{number_format($p->price, 2, ',', '.')}}</td>
                <td>
                    <a href="{{route('admin.products.edit', ['product' => $p->id])}}" class="btn btn-sm btn-primary">
                        Editar
                    </a>

                    <div class="btn-group">
                        <form action="{{route('admin.products.destroy', ['product' => $p->id])}}" method="post">
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

    {{$products->links()}}
@endsection
