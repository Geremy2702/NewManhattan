<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
<div class="users-table">
        <h2>CATALOGO DE PLATOS</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Ingredientes</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['username'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="users-table--edit">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="users-table--delete" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
    <div>
    <li><a href="pedidochat/public/index.html"><i class="fa fa-home"></i> HACER PEDIDO </a></li>
    </div>
    <div class="users-form">
        <h1>Ingresar nuevo plato</h1>
        <form action="insert_user.php" method="POST">
            <input type="text" name="name" placeholder="Nombre de plato">
            <input type="text" name="lastname" placeholder="Descripcion">
            <input type="text" name="username" placeholder="Ingredientes">

            <input type="submit" value="Agregar">
        </form>
    </div>

</body>

</html>