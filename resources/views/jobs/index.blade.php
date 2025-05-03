<!-- resources/views/jobs/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Jobs Listenansicht</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Alle Jobs</h1>
    
    <ul>
        @foreach($jobs as $job)
            <li>
                <a href="{{ route('jobs.detail', ['id' => $job->id]) }}">
                    {{ $job->jobtitle }}
                </a>
            </li>
        @endforeach
    </ul>

    <a href="{{ route('jobs.create') }}" class="btn1">Neuen Job erstellen</a>
    <a href="{{ route('home') }}" class="btn1">Home</a>

</body>
</html>