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
<?php
    include("phpFiles/read.php");

    if($_GET['id'] != 0){
        $edit = true;
        $allInfo = retInfo();
        foreach($allInfo as $info){
            if($info->id == $_GET['id']){
                $itemInfo = $info;
                break;
            }
        }
    }else{
        $edit = false;
    }
?>
<fieldset>
        <legend><h1>Verander je pizza</h1></legend>
        <form action="phpFiles/update.php" method="post">

            <!--PUTTING THE ID IN THE FORM FOR EASY ACCESS         READ ONLY-->
            <label>pizza nummer:</label>
            <input type="text" name="id" class="pizzaId" readonly value="<?php echo $itemInfo->id;?>">

            <!--SIZE DROPDOWN INPUTS-->
            <h3>Choose your size</h3>
            <select name="size">
                <option value="">Make your choice</option>
                <option value="20"<?php if($itemInfo->size == 20){echo 'selected="selected"';}?>>20cm</option>
                <option value="25"<?php if($itemInfo->size == 25){echo 'selected="selected"';}?>>25cm</option>
                <option value="30"<?php if($itemInfo->size == 30){echo 'selected="selected"';}?>>30cm</option>
                <option value="35"<?php if($itemInfo->size == 35){echo 'selected="selected"';}?>>35cm</option>
                <option value="40"<?php if($itemInfo->size == 40){echo 'selected="selected"';}?>>40cm</option>
            </select>

            <!--SAUCE DROPDOWN INPUTS-->
            <h3>Choose your sauce</h3>
            <select name="sauce">
                <option value="">Make your choice</option>
                <option value="tomatoSauce"<?php if($itemInfo->sauce == "tomatoSauce"){echo 'selected="selected"';}?>>Tomato sauce</option>
                <option value="extraTomatoSauce"<?php if($itemInfo->sauce == "extraTomatoSauce"){echo 'selected="selected"';}?>>Extra tomato sauce</option>
                <option value="spicyTomatoSauce"<?php if($itemInfo->sauce == "spicyTomatoSauce"){echo 'selected="selected"';}?>>Spicy tomato sauce</option>
                <option value="bbqSauce"<?php if($itemInfo->sauce == "bbqSauce"){echo 'selected="selected"';}?>>Bbq sauce</option>
                <option value="cremeFraice"<?php if($itemInfo->sauce == "cremeFraice"){echo 'selected="selected"';}?>>Creme fraiche</option>
            </select>


            <!--TOPPING RADIO INPUTS-->
            <div>
                <h3>Choose your topping</h3>
                <input type="radio" name="topping" id="vegan" value="vegan"
                <?php if($itemInfo->topping == "vegan"){echo 'checked="checked"';}?>>
                <label for="vegan">Vegan</label>
                
                <input type="radio" name="topping" id="vegie" value="vegetables"
                <?php if($itemInfo->topping == "vegetables"){echo 'checked="checked"';}?>>
                <label for="vegie">Vegetable</label>

                <input type="radio" name="topping" id="meat" value="meat"
                <?php if($itemInfo->topping == "meat"){echo 'checked="checked"';}?>>
                <label for="meat">Meat</label>
            </div>


            <!--SPICES CHECKBOX INPUTS-->
            <div>
                <h3>Choose your spices</h3>
                <input type="checkbox" name="spice1" id="parsley" value="parsley"
                <?php if(str_contains($itemInfo->spices, "parsley")){echo 'checked="checked"';}?>>
                <label for="parsley">Parsley</label>

                <input type="checkbox" name="spice2" id="oregano" value="oregano"
                <?php if(str_contains($itemInfo->spices, "oregano")){echo 'checked="checked"';}?>>
                <label for="oregano">Oregano</label>

                <input type="checkbox" name="spice3" id="chiliFlakes" value="chiliFlakes"
                <?php if(str_contains($itemInfo->spices, "chiliFlakes")){echo 'checked="checked"';}?>>
                <label for="chiliFlakes">Chilie flakes</label>

                <input type="checkbox" name="spice4" id="blackPeper" value="blackPeper"
                <?php if(str_contains($itemInfo->spices, "blackPeper")){echo 'checked="checked"';}?>>
                <label for="blackPeper">Black peper</label>
            </div>

            <button type="submit">Submit</button>
        </form>
    </fieldset>
</body>
</html>