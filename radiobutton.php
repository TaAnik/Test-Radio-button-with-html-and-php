<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- tittle for web page-->
        <title> Radio Button</title>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width=device-width,initial-scale=1">
    </head>
    <body>
    
        <?php
        if(isset($_POST))[btnSubmit]
        {
            //taking name of the color selected by user
            $color=$_POST['favouriteColor'];

            // takin name entered by user
            $name=$_POST['txtName'];

            // display name in favourite color

            echo "Hello<span style='color:".$color."';> ".$name."</span><br/>;
        }

        ?>
        </body>
        <html>
        