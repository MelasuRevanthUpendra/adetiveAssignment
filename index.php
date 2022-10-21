<?php require "connection.php";?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="index.css" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    </head>
    <body>
        <div id="backGround" class="text-alignment d-flex flex-column justify-content-center">
            <div>
                <div>
                    <label for="nameElement">Name</label>
                    <input id="nameElement" class="name" name="name" type="text" >
                </div>
                <br>
                <div>
                    <label for="colorElement">Color</label>
                    <input id="colorElement" class="color" name="color" type="text" >
                </div>
                <br>
                <div>
                    <button class="button">Submit</button>
                </div>
                <p id="paraComment"></p>
</div>
            <script type="text/javascript" src="index.js"></script>
        </div>
    </body>
</html>