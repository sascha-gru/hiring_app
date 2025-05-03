<!-- resources/views/categories/detail.blade.php = Detailansicht -->
<!DOCTYPE html>
<html>
<head>
    <title>Category Details</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1>Kategorie: {{ $category->category_name }}</h1>
    <div class="div-container">
    <p><strong>Beschreibung:</strong>{{ $category->description }}</p>
    </div>


    <h3 class="h3">Kategorie bearbeiten</h3>

        <form action="{{ route('categories.update', ['id' => $category->id]) }}" method="POST" class="form-container">
            @csrf
            @method('PUT')

            <input type="hidden" name="id" value="{{ $category->id }}">

            <label for="category_name">Kategorie Name:</label>
            <input type="text" name="category_name" id="category_name" value="{{ $category->category_name ?? '' }}" required>

            <label for="description">Beschreibung:</label>
            <textarea name="description" id="description">{{ $category->description ?? '' }}</textarea>

            <button type="submit" class="btn">Aktualisieren</button>

        </form>

    <a href="{{ route('categories.index') }}" class="btn1">Zurück zur Liste</a>

</body>
</html>
