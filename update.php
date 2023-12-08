<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Account</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="signup">
        Update account
        <form class="signup-form" action="includes/userupdate.inc.php" method="post">
            <input class="input" type="text" name="fullname" placeholder="full name"/>
            <input class="input" type="text" name="email" placeholder="email"/>
            <input class="input" type="password" name="password" placeholder="password"/>
            <button type="submit">Update</button>
        </form>

    </div>
</body>
</html>