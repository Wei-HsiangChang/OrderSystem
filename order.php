<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Order Result</title>
        <style>

            .wrapper{
                display: flex;  
                flex-wrap:wrap;
                border: 3px solid #c3c3c3;
                background-color: bisque;
                height: 450px;
                
            }
            

        </style>
    </head>
    <body>
        
        <?php
        $numCoffee = $_REQUEST["numCoffee"];
        $size = $_REQUEST["size"];
        $numCreams = $_REQUEST["numCreams"];
        $numSugars = $_REQUEST["numSugars"];
        $smallprice = $numCoffee*1.5*1.13;
        $mediumprice = $numCoffee*2.0*1.13;
        $largeprice = $numCoffee*2.5*1.13;

        ?>
        <h1> Thanks for your order. Please check:</h1><br>
        
        <section class="wrapper" >
            <?php 
            for($i=0; $i<$numCoffee; $i++)
            {
                if($size == Small)
                {    
                    echo 
                    "<div><img src='images/cup.jpg' width='100' height='160'></div>";
                }
                else
                {
                    if($size == Medium)
                    {    
                        echo 
                        "<div><img src='images/cup.jpg' width='110' height='190'></div>";
                    }
                    else
                    {
                        echo 
                        "<div><img src='images/cup.jpg' width='120' height='210'></div>";                       
                    }    
                }    
            } 
            if($numCreams!=0 || $numSugars!=0)
            {    
                echo 
                "<div><img src='images/plus.jpg' width='40' height='60'></div>";
            }    
            for($i=0; $i<$numCreams; $i++)
            {
                echo 
                "<div><img src='images/cream.jpg' width='40' height='60'></div>";              
            } 
            if($numSugars!=0)
            {    
                echo 
                "<div><img src='images/plus.jpg' width='30' height='50'></div>";
            }
                
            for($i=0; $i<$numSugars; $i++) 
            {
                echo 
                "<div><img src='images/sugar.jpg'></div>";
            }  
            ?>
            
        </section>
        

        <p class="total">
         
        You select size <?php echo $size ?> <br>
        <?php echo " Number of coffee : ".$numCoffee."<br>" ?>
        <?php
        if($size == Small)          
            echo "Total Price: $1.5 x ".$numCoffee." plus tax = $".$smallprice; 
        else    
            if($size == Medium)
                echo "Total Price: $2.0 x ".$numCoffee." plus tax = $".$mediumprice; 
            else
                echo "Total Price: $2.5 x ".$numCoffee." plus tax = $".$largeprice;          
        ?>
        </p>
        
    </body>
</html>
