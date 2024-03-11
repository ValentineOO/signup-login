<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $mysqli = require __DIR__ . "/database.php";

    $sql = sprintf("SELECT * FROM user WHERE email = '%s'", $_POST["email"]);

    $result = $mysqli->query($sql);
    $user = $result->fetch_assoc();

    var_dump($user);
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>
    <h1>Login</h1>
    <form method="post" novalidate>
        <label for="email">email</label>
        <input type="email" name="email" id="email" autocomplete="new_email">

        <label for="password">Password</label>
        <input type="password" name="password" id="password" autocomplete="new-password">

        <button>Log in</button>
    </form>
</body>

</html>