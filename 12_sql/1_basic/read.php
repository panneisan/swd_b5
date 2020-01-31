<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
    <style>
        table{
            width: 100%;
        }
        table,tr,th,td{
            border:1px solid black;
            border-collapse: collapse;
            padding: 10px 15px;
        }
        .btn-del{
            background: red;
            color: white;
            text-decoration: none;
            border-radius: 0.25rem;
            padding: 5px 15px;
        }
        .btn-update{
            background: orange;
            color: white;
            text-decoration: none;
            border-radius: 0.25rem;
            padding: 5px 15px;
        }
    </style>
</head>
<body>
<?php

    $con = mysqli_connect("localhost","root","","weekday_sql");
    $sql = "SELECT * FROM contacts";
    $query = mysqli_query($con,$sql);


?>
<a href="create.php">Add New Contact</a>
<table>
    <thead>
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Phone</th>
        <th>Controls</th>
        <th>Reg Time</th>
    </tr>
    </thead>
    <tbody>


    <?php while($row = mysqli_fetch_assoc($query)){ ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row["phone"] ?></td>
        <td>
            <a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are U Sure To Delete <?php echo $row['name'] ?>')" class="btn-del">delete</a>
            <a href="update.php?id=<?php echo $row['id'];?>" class="btn-update">update</a>
        </td>
        <td><?php echo $row['created_at'] ?></td>
    </tr>
    <?php } ?>

    </tbody>
</table>

</body>
</html>