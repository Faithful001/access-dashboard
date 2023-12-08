<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Account</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="signup">
        Delete account
        <form class="signup-form" action="includes/userdelete.inc.php" method="post">
            <input class="input" type="text" name="fullname" placeholder="full name"/>
            <input class="input" type="password" name="password" placeholder="password"/>
            <button type="submit">Delete</button>
        </form>

    </div>
</body>
</html>