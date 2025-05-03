<!-- resources/views/categories/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Category Listenansicht</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Alle Kategorien</h1>

    <ul>
        @foreach($categories as $category)
            <li>
            <a href="{{ route('categories.detail', ['id' => $category->id]) }}">
                {{ $category->category_name }}
                </a>
            </li> 
        @endforeach
    </ul>

    <a href="{{ route('categories.create') }}" class="btn1">Neue Kategorie erstellen</a>
    <a href="{{ route('home') }}" class="btn1">Home</a>

</body>
</html>