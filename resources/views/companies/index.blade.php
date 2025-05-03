<!-- resources/views/companies/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Companies Listenansicht</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Alle Unternehmen</h1>

    <ul>
        @foreach($companies as $company)
            <li>
                <a href="{{ route('companies.detail', ['id' => $company->id]) }}">
                    {{ $company->name }}
                </a>
            </li> 
        @endforeach
    </ul>

    <a href="{{ route('companies.create') }}" class="btn1">Neues Unternehmen erstellen</a>
    <a href="{{ route('home') }}" class="btn1">Home</a>

</body>
</html>