<!-- resources/views/login.blade.php = Login -->
<!DOCTYPE html>
<html>
<head>
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
   
    <h2>User Login</h2>

    <form action="{{ route('login') }}" method="POST" class="form-container">
        @csrf

        <label for="email">E-Mail:</label>
        <input type="email" name="email" required>
        
        <label for="password">Passwort:</label>
        <input type="password" name="password" required>
        
        <button type="submit" class="btn1">Einloggen</button>
    </form>

</body>
</html>
