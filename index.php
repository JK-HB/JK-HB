<!DOCTYPE html>

<html lang="en">

    <head>

        <meta charset="utf-8">

        <title>UuuU</title>

        <link rel="stylesheet" href="style.css">
        
    </head>

    <body>

        <form class="box" method="POST" action="login_process.php">

            <h1>Welcome</h1>

            <label for="userID" class="title"></label>
            <input type="text" name="userID" placeholder="ID">

            <label for="userPW" class="title"></label>
            <input type="password" name="userPW" placeholder="Password">

            <input type="submit" value="로그인">
            <input type="button" value="회원가입" onClick="location.href='signup.php'">

        </form>

    </body>

</html>