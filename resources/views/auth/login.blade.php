<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>Login - Inventory App</title>
</head>

<body>

    <h1>Inventory Management System</h1>

    <h2>Login</h2>

    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('login.process') }}">

        @csrf

        <div>
            <label>Email</label>

            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </div>

        <br>

        <div>
            <label>Password</label>

            <input
                type="password"
                name="password"
                required
            >
        </div>

        <br>

        <div>
            <label>
                <input
                    type="checkbox"
                    name="remember"
                >

                Remember me
            </label>
        </div>

        <br>

        <button type="submit">
            Login
        </button>

    </form>

</body>
</html>