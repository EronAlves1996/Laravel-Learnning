<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline PHP Example</title>
</head>

<body>

    <h1>Welcome, {{ $name }}</h1>
    @if ($isAdmin)
        <p>You have admin privileges.</p>
    @else
        <p>You do not have admin privileges.</p>
    @endif

    <p>Your age is {{ $age }}</p>
</body>

</html>
