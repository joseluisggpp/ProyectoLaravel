<h2>Login</h2>
<form action="/authentication" method="POST">
    @csrf

    <div>
        <label for="token">Token</label>
        <input type="text" id="text" name="token" value="">
    </div>
    <div>
        <button type="submit">Verificar</button>
    </div>
</form>