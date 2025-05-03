<!-- resources/views/jobs/detail.blade.php = Detailansicht -->
<!DOCTYPE html>
<html>
<head>
    <title>Job Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Titel: {{ $job->jobtitle }}</h1>
    <div class="div-container">
    <p><strong>Beschreibung:</strong>{{ $job->description }}</p>
    <p><strong>Jahresgehalt:</strong> {{ $job->salary }}</p>
    </div>


    <h3 class="h3">Job bearbeiten</h3>

        <form action="{{ route('jobs.update', ['id' => $job->id]) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $job->id }}">

            <label for="jobtitle">Titel:</label>
            <input type="text" name="jobtitle" id="jobtitle" value="{{ $job->jobtitle ?? '' }}" required>

            <label for="description">Beschreibung:</label>
            <textarea name="description" id="description">{{ $job->description ?? '' }}</textarea>

            <label for="salary">Jahresgehalt:</label>
            <input type="number" name="salary" id="salary" value="{{ $job->salary ?? '' }}">

            <button type="submit" class="btn">Aktualisieren</button>
        </form>

    <a href="{{ route('jobs.index') }}" class="btn1">Zurück zur Liste</a>

</body>
</html>
