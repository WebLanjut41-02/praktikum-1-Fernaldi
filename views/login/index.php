<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
<h1>INI LOGIN</h1>
    <form action="<?php echo base_url(); ?>c_login/index" method="POST">
        <tr>
            <td>
             Username   <input type="text" name="username">
             <td>
             Password   <input type="password" name="password">
             </td>
            <input type="submit" name="submit" value="Login">
            
            </td>
        </tr>
    </form>
</body>
</html>