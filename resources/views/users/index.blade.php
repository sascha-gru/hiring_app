<!-- resources/views/users/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>User Listenansicht</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Alle User</h1>

    <ul>
        @foreach($users as $user)
            <li>
            <a href="{{ route('users.detail', ['id' => $user->id]) }}">
                {{ $user->username }}
            </a>
        </li> 
        @endforeach
    </ul>

    <a href="{{ route('users.create') }}" class="btn1">Neuen User erstellen</a>
    <a href="{{ route('home') }}" class="btn1">Home</a>

</body>
</html>