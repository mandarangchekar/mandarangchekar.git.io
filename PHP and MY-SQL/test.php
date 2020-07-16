<!DOCTYPE html>
    <html>
        <head>
            <style>
                *{
                font-family: sans-serif;
                background-color: #f9f9f9;
            }
            .container{
                display: flex;
                flex-direction:column;
                align-items: center;
                justify-content: center;
                text-align: center;
                padding-top: 15%;
            }
            </style>
        </head>
    <body>
    
    <div class="container">
        <h2></h2>
        <h2>
        <?php echo "The Prime Numbers Between",$_POST['n1']," and ",$_POST['n2']," are:";?></h2>
        <h3>
        <?php 

            function primeCheck($number){ 
            if ($number == 1) 
            return 0; 
            for ($i = 2; $i <= $number/2; $i++){ 
                if ($number % $i == 0) 
                    return 0; 
            } 
            return 1; 
            } 
            for ($j = $_POST['n1']; $j <= $_POST['n2'] ; $j++) {
                $flag = primeCheck($j);
                if ($flag == 1) 
                echo $j," " ; 

            }

        ?> </h3>
    </div>
    </body>
    </html>
