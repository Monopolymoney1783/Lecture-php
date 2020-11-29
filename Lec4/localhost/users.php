<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Users</title>
    <style>
        input{
            margin-bottom: 10px;
            width: 200px;
        }
        .width{
            width: 40px;
        }
        .table-color{
            background-color: #dee2e6;
        }
    </style>
</head>
<body>
<table class="table table-sm table-hover">
    <thead class="table-color">
    <tr>
        <th scope="col" class="h6 text-muted text-center">KEY</th>
        <th scope="col" class="h6 text-muted text-center">ID</th>
        <th scope="col" class="h6 text-muted text-center">SURNAME</th>
        <th scope="col" class="h6 text-muted text-center">NAME</th>
        <th scope="col" class="h6 text-muted text-center">AGE</th>
        <th scope="col" class="h6 text-muted text-center"></th>
    </tr>
    </thead>
    <?php
    foreach($_SESSION['0j'] as $key => $value) {
        echo "<tr><td class='table-color width text-center'>$key</td>";
        foreach($value as $value1) {
            echo "<td class='text-center'>$value1</td>";
        }
        echo "<td class='text-center'><p><a type='delete' name='delete' href='delete?key=$key'><img src='./delete.png' width='20' height='20'></a></p></td></tr>";
    }
    ?>
</table>
</body>
</html>
