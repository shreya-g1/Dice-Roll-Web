<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Dice Roll</title>
    </head>

    <body>
        <h1>Dice Roll Generator</h1>

        <form action="Random Number Generator.php" method="get">
            <label for="numRolls">How many dice rolls?</label>
            <br>
            <input type="number" id="numRolls" name="numRolls" value="1" min="1" max="1000">
            <br>

            <br>
            <label for="numSides">Select the sides of the die.</label> 
            <br>
            <select name="numSides" id="numSides"> 
                <option value="4">d4</option> 
                <option value="6" selected>d6</option> 
                <option value="8">d8</option> 
                <option value="10">d10</option> 
                <option value="12">d12</option> 
                <option value="20">d20</option> 
            </select>
            <br>
            
            <br>
            <input type="submit" value="Generate">
        </form>

        <br>

        <?php 
            if (isset($_GET["numRolls"], $_GET["numSides"])) {
                srand(time());
                $randNum = 0;

                for($i=0; $i<$_GET["numRolls"]; $i++){
                    $randNum = rand(1, $_GET["numSides"]);
                    print_r($randNum);
                    print_r(", ");
                }
            }
        ?>
    </body>
</html>    

