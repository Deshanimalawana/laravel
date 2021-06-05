<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Page</title>
</head>
<body>
    <form action="user" method="post">
        @csrf
        User Name: <input type="text" name="username" id="username"> <br><br>
        Password: <input type="password" name="password" id="password"><br><br>
        <input type="submit" value="LOGIN">



    </form>
</body>
</html>