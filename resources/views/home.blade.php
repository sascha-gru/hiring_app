<!DOCTYPE html>
<html>
<title>Home</title>
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <h2>Was möchtest du bearbeiten?</h2>
        <div class="button-container">
            <ul>
                <li>
                    <a class="btn1" href="{{ route('jobs.index') }}">Jobs erstellen/bearbeiten</a>
                </li>
                <li>
                    <a class="btn1" href="{{ route('companies.index') }}">Companies erstellen/bearbeiten</a>
                </li>
                <li>
                    <a class="btn1" href="{{ route('categories.index') }}">Categories erstellen/bearbeiten</a>
                </li>
                <li>
                    <a class="btn1" href="{{ route('users.index') }}">Users erstellen/bearbeiten</a>
                </li>
            </ul>
        </div>
</body>
</html>
