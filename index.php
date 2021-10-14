<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order System</title>
        <style>
            .error { color:red; }      
            .center{
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            .form {
                text-align: center;
                border: 3px solid green;
            } 
            
        </style>
    </head>
    <body>
        
            
        <?php
       // variables initialized to empty strings
            $numCoffee = "";
            $numErr = "";
        // check when press send    
        if (isset($_REQUEST['send']))
            {
                // check if the number field is empty
                if (empty($_REQUEST['numCoffee']))
                {
                    $numErr = "Number field is required";
                }
                else
                {
	            $numCoffee = $_REQUEST['numCoffee'];
                }
                // check if the number value is negative
                if($_REQUEST['numCoffee']<0)
                {
                    $numErr = "Number can't be negative";                    
                }
      
            } 
         
        ?>
        <img src="images/logo-en.png" width="170" height="180" class="center" >
     
        <h1 align="center">Welcome to Starbucks </h1>
        <form action="order.php" method="post" class="form">
            Numbers of coffee: <input type="text" name="numCoffee" value="<?php echo $numCoffee ?>">
            <span class="error">*required <?php echo $numErr; ?></span><br><br>
            
            Size:<select name="size" required>
                    <option value="">Select Size</option>
                    <option value="Small">Small</option>
                    <option value="Medium">Medium</option>
                    <option value="Large">Large</option>
	    </select>
            <br><br>
            Creams Number<input type="number" id="numTickets" name="numCreams" required aria-required="true" min="0" max="4">
            <br><br>
            
            Sugars Number<input type="number" id="numSugars" name="numSugars" required aria-required="true" min="0" max="4">
            <br><br>
            <br><br>
        
            <input type="submit" name="send" value="Send order">
        </form>
        
    </body>
</html>
