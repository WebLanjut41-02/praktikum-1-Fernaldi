
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin_page</title>
</head>
<body>
    <p>Haii, <?php echo $this->session->user; ?></p>
    <a href="<?php echo base_url('c_login/logout') ?>">Logout</a>

    <table border="solid 1px">
    <tr>
        <th>Username</th>
        <th>Password</th>  
     </tr>
        <tr>
        <td><?php echo $username; ?></td>
        <td><?php echo $password; ?></td>
        </tr>
    </table>
</body>
</html>