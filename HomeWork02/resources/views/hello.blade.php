<html>

<head>
    <title>User information</title>
</head>

<body>
    <p>Hello {{ $user['user name'] }}!!</p>
    <table border="1">
        <tr>
            <td>First name:</td>
            <td>{{ $user['user name'] }}</td>
        </tr>
        <tr>
            <td>Last name:</td>
            <td>{{ $user['last name'] }}</td>
        </tr>
        <tr>
            <td>email:</td>
            <td>{{ $user['email'] }}</td>
        </tr>
    </table>
</body>

</html>