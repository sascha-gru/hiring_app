<!-- resources/views/categories/create.blade.php = Erstellen -->
<!DOCTYPE html>
<html>
<head>
    <title>New Category</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <h2>Neue Kategorie erstellen</h2>

        <form action="{{ route('categories.store') }}" method="POST" class="form-container">
            @csrf

            <label for="category_name">Kategorie Name:</label>
            <input type="text" name="category_name" id="category_name" value="{{ $category->category_name ?? '' }}" required>

            <label for="description">Beschreibung:</label>
            <textarea name="description" id="description">{{ $category->description ?? '' }}</textarea>

            <button type="submit" class="btn">Neu einstellen</button>

        </form>

    <a href="{{ route('categories.index') }}" class="btn1">Zurück zur Liste</a>

</body>
</html>
