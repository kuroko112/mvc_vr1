<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title?></title>
    </head>
    <body>
        <h1 style="text-align: center;"><?= $head?></h1><br>

        <form action="postregister" method="post">
            username : <input type="text" name="name"      >
            Email : <input type="text"    name="email"     >
            Passwrod : <input type="password"  name="password"  >
            FullName : <input type="text" name="fullname"  >
            <input type="submit" value="Save">
        </form>
    </body>
</html>