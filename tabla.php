!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Mercado Online</title>
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
		<script src="js/jquery2.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="main.js"></script>
	</head>
<body>
	<center>
    <table>
    <thead>
    <tr>
    <th colspan="1"><a href=""></a></th>
    <th colspan="5">Lista de Usuario</th>
    </tr>
    </thead>
    <tbody>
    </tbody>
    <tr>
    <td>id</td>
    <td>Nombre</td>
    <td>Apellido</td>
    <td>RUT</td>
    <td>Fecha de nacimiento</td>
    <td>correo</td>
    <td>Modificar</td>
    <td>Eliminar</td>
    </tr>

    <?php
    include 'bd.php';
    $query="SELECT * FROM user_info";
    $resultado=$conn->query($query);
    while($row=$resultado->fetch_assoc()){

    }

    ?>
    <tr>
    td>id</td>
    <td><?php echo $row['user_id']; ?></td>
    <td><?php echo $row['nombre']; ?></td>
    <td><?php echo $row['apellido']; ?></td>
    <td><?php echo $row['rut']; ?></td>
    <td><?php echo $row['correo']; ?></td>
    <td><a href="">Modificar</a></td>
    <td>Eliminar</td>
    </tr>
    </table>
    </center>
</body>
</html>



