<h1>Nuevo Usuario</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="/registro" method="POST">
    @csrf
    <label>Nombres</label>
    <input type="text" name="name">
    <br>
    <label>Email</label>
    <input type="text" name="email">
    <br>
    <label>Password</label>
    <input type="password" name="password">
    <br>
    <label>Repetir Password</label>
    <input type="password" name="c_password">
    <br>
    <input type="submit" value="Registratse">
</form>