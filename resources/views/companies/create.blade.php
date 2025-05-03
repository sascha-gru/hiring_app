<!-- resources/views/companies/create.blade.php = Erstellen -->
<!DOCTYPE html>
<html>
<head>
    <title>New Company</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
  
    <h2>Neues Unternehmen erstellen</h2>

        <form action="{{ route('companies.store') }}" method="POST" class="form-container">
            @csrf

            <label for="name">Unternehmen:</label>
            <input type="text" name="name" id="name" value="{{ $company->name ?? '' }}" required>

            <label for="description">Beschreibung:</label>
            <textarea name="description" id="description">{{ $company->description ?? '' }}</textarea>

            <label for="street">Strasse:</label>
            <input type="text" name="street" id="street" value="{{ $company->street ?? '' }}">

            <label for="zip">PLZ:</label>
            <input type="number" name="zip" id="zip" value="{{ $company->zip ?? '' }}">

            <label for="location">Ort:</label>
            <input type="text" name="location" id="location" value="{{ $company->location ?? '' }}">

            <button type="submit" class="btn">Neu einstellen</button>

        </form>

    <a href="{{ route('companies.index') }}" class="btn1">Zurück zur Liste</a>

</body>
</html>
