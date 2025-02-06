<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="hw_user_form">
        <form name="user_form" id="user_formuser_form" method="post" action="{{url('/store-user')}}">
            @csrf
            <div class="form-section">
                <label for="name">User name</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="form-section">
                <label for="surname">User surname</label>
                <input type="text" id="surname" name="surname" class="form-control" required>
            </div>
            <div class="form-section">
                <label for="email">User email</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>
            <input type="submit" value="create user">
        </form>
        @if ($errors->any())
        @foreach($errors->all() as $error)
        {{$error}} <br>
        @endforeach
        @endif
    </div>
</body>

</html>