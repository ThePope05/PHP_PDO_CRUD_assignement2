<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,1,0" />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <fieldset class="scroll">
        <legend>
            <h1>All pizzas</h1>
        </legend>
        <table>
            <tr>
                <th>ID</th>
                <th>Size</th>
                <th>Sauce</th>
                <th>Topping</th>
                <th>Spices</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php
                include("phpFiles/read.php");

                $allPizzas = retInfo();

                foreach($allPizzas as $pizza){
                    echo "<tr>";
                        echo "<td>$pizza->id</td>";
                        echo "<td>$pizza->size</td>";
                        echo "<td>$pizza->sauce</td>";
                        echo "<td>$pizza->topping</td>";
                        echo "<td>$pizza->spices</td>";
                        echo "<td><a href='editForm.php?id=$pizza->id'><span class='material-symbols-outlined'>edit</span></a></td>";
                        echo "<td><a href='phpFiles/delete.php?id=$pizza->id'><span class='material-symbols-outlined'>delete</span></a></td>";
                    echo "</tr>";
                }
            ?>
            <tr>
                <td><a href="createForm.php"><span class='material-symbols-outlined'>add_circle</span></a></td>
            </tr>
        </table>
    </fieldset>
</body>
</html>