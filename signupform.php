<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
    <link rel="stylesheet" href="signupform.css">
</head>
<body>
    <div id="divform">
        <form action="insertt.php" method="post">
           
            <h1 style="text-shadow:2px 2px pink;">Signup</h1>
            <p>First Name<br> <input type="text" name="first_name" required placeholder="Type your Name" id="first_name" style="border-radius: 10px;"></p>

            <p>Last Name<br> <input type="text" name="last_name" required placeholder="Type your Name" id="last_name" style="border-radius: 10px;"></p>

            <p>Gender<br> <input type="text" name="gender" required placeholder="Type your Name" id="gender" style="border-radius: 10px;"></p>

            <p>Address<br> <input type="text" name="address" required placeholder="Type your Name" id="address" style="border-radius: 10px;"></p>
            <p>E-mail address<br> <input type="text" name="email" required placeholder="Type your email" id="email" style="border-radius: 10px;"></p>
            <!-- <p>Password<br> <input type="password" name="pass" id="pass" required placeholder="Type your password"style="border-radius: 10px;"></p> -->
           
            <p><input type="submit" name="submit" id="submit"></p>
            <p>Already have an account? <a href="form.html" style="text-decoration:none; color:darkblue;text-shadow:2px 2px pink;">Login</a></p>
        </form>
    </div>
</body>
</html>