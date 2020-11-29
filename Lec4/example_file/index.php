<?php
// подключаем самый главный и основоной файл логики
require_once './ext/ext.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Index</title>
    <style>
        input{
            margin-bottom: 10px;
            width: 200px;
        }
        form{
            width: 300px;
            padding: 10px;
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
<?php
// здесь рендерим html шаблон, который находится в папке layouts
// прикол в том, что в папке layouts лежат файлы, которые отвечают за вывод
// 
// в ext/layout.php описан текущий вызываемый метод
renderLayout();
?>
</body>
</html>
