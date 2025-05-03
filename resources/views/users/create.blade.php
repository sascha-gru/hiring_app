<!-- resources/views/users/create.blade.php = Erstellen -->
<!DOCTYPE html>
<html>
<head>
    <title>New User</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
   
    <h2>Neuen User erstellen</h2>

        <form action="{{ route('users.store') }}" method="POST" class="form-container">
            @csrf

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ $user->username ?? '' }}" required>

            <label for="email">Email:</label>
            <input type="string" name="email" id="email" value="{{ $user->email ?? '' }}" required>

            <label for="password">Passwort:</label>
            <input type="string" name="password" id="password" value="{{ $user->password ?? '' }}" required>

            <button type="submit" class="btn">Neu einstellen</button>
        </form>

    <a href="{{ route('users.index') }}" class="btn1">Zurück zur Liste</a>

</body>
</html>
