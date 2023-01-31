<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend><h1>Make your own pizza</h1></legend>
        <form action="" method="post">

            <!--SIZE DROPDOWN INPUTS-->
            <h3>Choose your size</h3>
            <select name="size">
                <option value="">Make your choise</option>
                <option value="20">20</option>
                <option value="25">25</option>
                <option value="30">30</option>
                <option value="35">35</option>
                <option value="40">40</option>
            </select>

            <!--SAUCE DROPDOWN INPUTS-->
            <h3>Choose your sauce</h3>
            <select name="sauce">
                <option value="">Make your choise</option>
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
                
                <input type="radio" name="topping" id="vegie" value="vegie">
                <label for="vegie">Vegetable</label>

                <input type="radio" name="topping" id="meat" value="meat">
                <label for="meat">Meat</label>
            </div>


            <!--SPICES CHECKBOX INPUTS-->
            <div>
                <h3>Choose your spices</h3>
                <input type="checkbox" name="spices" id="parsley" value="parsley">
                <label for="parsley">Parsley</label>

                <input type="checkbox" name="spices" id="oregano" value="oregano">
                <label for="oregano">Oregano</label>

                <input type="checkbox" name="spices" id="chiliFlakes" value="chiliFlakes">
                <label for="chiliFlakes">Chilie flakes</label>

                <input type="checkbox" name="spices" id="blackPeper" value="blackPeper">
                <label for="blackPeper">Black peper</label>
            </div>
        </form>
    </fieldset>
</body>
</html>