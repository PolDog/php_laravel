<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="add_books_form-wrapper">
        <form name="add-new-book" id="add-new-book" method="post" action="{{url('store-form')}}">
            @csrf
            <div class="form-section">
                <label for="title">Title</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-section">
                <label for="author">Author</label>
                <input type="text" id="author" name="author" class="form-control" required>
            </div>
            <div class="form-section">
                <label for="genre">Choose genre:</label>
                <select name="genre" id="genre">
                    <option value="fantasy">Fantasy</option>
                    <option value="sci-fi">Sci-fi</option>
                    <option value="mystery">Mystery</option>
                    <option value="drama">Drama</option>
                </select>
            </div>
            <input type="submit" value="create book">
        </form>
        @if ($errors->any())
        @foreach($errors->all() as $error)
        {{$error}} <br>
        @endforeach
        @endif
    </div>
</body>

</html>