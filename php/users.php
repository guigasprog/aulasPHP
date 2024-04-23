<?php
    include 'conexao.php';
    $sql = "select * from users;";
    $connected = Conexao::connect();
    $listUsers = $connected->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>
        <?php
            foreach ($listUsers as $user) {?>
                <tr>
                    <td><?php echo $user['name'] ?></td>
                    <td><?php echo $user['email'] ?></td>
                    <td><?php echo $user['password'] ?></td>
                </tr>
            <?php } ?>
    </table>
</body>
</html>