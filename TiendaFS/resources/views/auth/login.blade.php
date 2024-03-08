<h2>Login</h2>
<form action="/login" method="POST">
    @csrf
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="text" id="password" name="password" value="">
    </div>
    <div>
        <button type="submit">Iniciar Sesión</button>
    </div>
</form>