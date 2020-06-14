<h1>Criar loja</h1>

<form action="/admin/stores/store" method="post">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <div>
        <lable>Nome Loja</lable>
        <input type="text" name="name">
    </div>

    <div>
        <lable>Descrição</lable>
        <input type="text" name="description">
    </div>

    <div>
        <lable>Telefone</lable>
        <input type="text" name="phone">
    </div>

    <div>
        <lable>Celular</lable>
        <input type="text" name="mobile_phone">
    </div>

    <div>
        <lable>Slug</lable>
        <input type="text" name="slug">
    </div>

    <div>
        <lable>Usuário</lable>
        <select name="user">
            @foreach($users as $user)
                <option value="{{$user->id}}">{{$user->name}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <button type="submit">Criar loja</button>
    </div>

</form>
