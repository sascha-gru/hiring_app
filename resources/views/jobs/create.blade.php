<!-- resources/views/jobs/create.blade.php = Erstellen -->
<!DOCTYPE html>
<html>
<head>
    <title>New Job</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h2>Neuen Job erstellen</h2>

        <form action="{{ route('jobs.store') }}" method="POST" class="form-container">
            @csrf

            <label for="jobtitle">Titel:</label>
            <input type="text" name="jobtitle" id="jobtitle" value="{{ $job->jobtitle ?? '' }}" required>

            <label for="description">Beschreibung:</label>
            <textarea name="description" id="description">{{ $job->description ?? '' }}</textarea>

            <label for="salary">Jahresgehalt:</label>
            <input type="number" name="salary" id="salary" value="{{ $job->salary ?? '' }}">

            <button type="submit" class="btn">Neu einstellen</button>
        </form>

    <a href="{{ route('jobs.index') }}" class="btn1">Zurück zur Liste</a>

</body>
</html>
