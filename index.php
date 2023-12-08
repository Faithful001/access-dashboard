<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./css/index.css">
</head>
<body>
    <div class="signup">
        <h1>Sign up</h1>
        <form class="signup-form" action="includes/signup.inc.php" method="post">
            <input class="input" placeholder="user name" name="username" type="text"/>        
            <input class="input" placeholder="email" name="email" type="text"/>        
            <input class="input" placeholder="password" name="password" type="password"/>
            <button type="submit">Sign up</button>        
        </form>
    </div>
    <!-- <div class="login">
        <h1>Login</h1>
        <form class="signup-form" action="includes/login.inc.php" method="post">    
            <input class="input" placeholder="email" name="email" type="text"/>        
            <input class="input" placeholder="password" name="password" type="password"/>
            <button type="submit">Sign up</button>        
        </form>
    </div> -->
</body>
</html>