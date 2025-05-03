<!-- resources/views/users/detail.blade.php = Detailansicht -->
<!DOCTYPE html>
<html>
<head>
    <title>User Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>User:</h1>
    <div class="div-container">
    <p><strong>Username:</strong>{{ $user->username }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <p><strong>Passwort:</strong> {{ $user->password }}</p>
    </div>


    <h3 class="h3">User bearbeiten</h3>

        <form action="{{ route('users.update', ['id' => $user->id]) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $user->id }}">

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" value="{{ $user->username ?? '' }}" required>

            <label for="email">Email:</label>
            <input type="string" name="email" id="email" value="{{ $user->email ?? '' }}">

            <label for="password">Passwort:</label>
            <input type="string" name="password" id="password" value="{{ $user->password ?? '' }}">

            <button type="submit" class="btn">Aktualisieren</button>
        </form>

        <a href="{{ route('users.index') }}" class="btn1">Zurück zur Liste</a>

</body>
</html>
