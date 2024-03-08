<h2>Login</h2>
<form action="/login">
    <div>
        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="{{ old('email') }} ">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="text" id="password" name="password" value="{{ old('password') }} ">
    </div>
</form>