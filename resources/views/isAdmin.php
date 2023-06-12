<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inline PHP Example</title>
</head>
<body>
    <?php
        $name = 'John Doe';
        $age = 30;
        $isAdmin = true;
    ?>
    <h1>Welcome, <?= $name ?></h1>
    <?php if ($isAdmin): ?>
        <p>You have admin privileges.</p>
    <?php else: ?>
        <p>You do not have admin privileges.</p>
    <?php endif; ?>
    
    <p>Your age is <?= $age; ?></p>
</body>
</html>