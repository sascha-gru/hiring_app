<!-- resources/views/companies/detail.blade.php = Detailansicht -->
<!DOCTYPE html>
<html>
<head>
    <title>Company Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Unternehmen: {{ $company->name }}</h1>
    <div class="div-container">
    <p><strong>Beschreibung:</strong>{{ $company->description }}</p>
    <p><strong>Strasse:</strong>{{ $company->street }}</p>
    <p><strong>PLZ:</strong>{{ $company->zip }}</p>
    <p><strong>Ort:</strong>{{ $company->location }}</p>
    </div>


    <h3 class="h3">Kategorie bearbeiten</h3>

        <form action="{{ route('companies.update', ['id' => $company->id]) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $company->id }}">

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

            <button type="submit" class="btn">Aktualisieren</button>

        </form>

    <a href="{{ route('companies.index') }}" class="btn1">Zurück zur Liste</a>

</body>
</html>
