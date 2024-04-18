<h1>Novo Usuário</h1>

@if ($errors - any())
    <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }}
        @endforeach
    </ul>

    <form action="{{ route('users.store') }}" method="POST">
        @csrf()
        <input type="text" name="name" placeholder="Nome..." value="{{ old('name') }}">
        <input type="email" name="email" placeholder="Email...">
        <input type="password" name="password" placeholder="Senha">
        <button type="submit">Enviar</button>
    </form>
