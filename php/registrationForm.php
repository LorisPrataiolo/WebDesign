<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
</head>
<body>
    <form id="form" action="registration.php" method="post">
        
        <label for="username">Username</label>
        <input type="text" name="username" placeholder="Username">
        
        <label for="name">Name</label>
        <input type="text" name="name" placeholder="Name">
        
        <label for="surname">Surname</label>
        <input type="text" name="surname" placeholder="Surname">
        
        <label for="email">Email</label>
        <input type="email" name="email" placeholder="Email">
        
        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password">
        
        <label for="confirmPassword">Confirm Password</label>
        <input type="password" name="confirmPassword" placeholder="Confirm Password">
        
        <input type="submit" value="Register">
    </form> 
</body>
</html>