<html>

<head>
    <title>User form</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>
    <div class="container mt-4">
        <div class="card">
            <div class="card-body"><form name="user_form" id="user_form" method="post" action="{{ route('store') }}">
                @csrf
                    <div class="form-group">
                        <label for="first_name">Name</label>
                        <input type="text" id="first_name" name="first_name" class="form-control" required=""><br>
                        <label for="last_name">Last name</label>
                        <input type="text" id="last_name" name="last_name" class="form-control" required=""><br>
                        <label for="email">email</label>
                        <input type="text" id="email" name="email" class="form-control" required=""><br>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>