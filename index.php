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
    <fieldset>
        <legend><h1>Make your own pizza</h1></legend>
        <form action="phpFiles/create.php" method="post">

            <!--SIZE DROPDOWN INPUTS-->
            <h3>Choose your size</h3>
            <select name="size">
                <option value="">Make your choice</option>
                <option value="20">20cm</option>
                <option value="25">25cm</option>
                <option value="30">30cm</option>
                <option value="35">35cm</option>
                <option value="40">40cm</option>
            </select>

            <!--SAUCE DROPDOWN INPUTS-->
            <h3>Choose your sauce</h3>
            <select name="sauce">
                <option value="">Make your choice</option>
                <option value="tomatoSauce">Tomato sauce</option>
                <option value="extraTomatoSauce">Extra tomato sauce</option>
                <option value="spicyTomatoSauce">Spicy tomato sauce</option>
                <option value="bbqSauce">Bbq sauce</option>
                <option value="cremeFraice">Creme fraiche</option>
            </select>


            <!--TOPPING RADIO INPUTS-->
            <div>
                <h3>Choose your topping</h3>
                <input type="radio" name="topping" id="vegan" value="vegan">
                <label for="vegan">Vegan</label>
                
                <input type="radio" name="topping" id="vegie" value="vegetables">
                <label for="vegie">Vegetable</label>

                <input type="radio" name="topping" id="meat" value="meat">
                <label for="meat">Meat</label>
            </div>


            <!--SPICES CHECKBOX INPUTS-->
            <div>
                <h3>Choose your spices</h3>
                <input type="checkbox" name="spice1" id="parsley" value="parsley">
                <label for="parsley">Parsley</label>

                <input type="checkbox" name="spice2" id="oregano" value="oregano">
                <label for="oregano">Oregano</label>

                <input type="checkbox" name="spice3" id="chiliFlakes" value="chiliFlakes">
                <label for="chiliFlakes">Chilie flakes</label>

                <input type="checkbox" name="spice4" id="blackPeper" value="blackPeper">
                <label for="blackPeper">Black peper</label>
            </div>

            <button type="submit">Submit</button>
        </form>
    </fieldset>
    <fieldset>
        <legend>
            <h1>Others pizzas</h1>
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
                        echo "<td><a><span class='material-symbols-outlined'>edit</span></a></td>";
                        echo "<td><a><span class='material-symbols-outlined'>delete</span></a></td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </fieldset>
</body>
</html>