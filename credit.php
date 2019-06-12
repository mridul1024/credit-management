<?php
include_once('connect.php');

$creditfrom = $_GET['creditfrom'];
$creditto = $_GET['creditto'];


?>

<!DOCTYPE html>

    <header>
        
            <meta charset="utf-8">
    
            <!--========Personal style sheet link===========-->
            <link rel="stylesheet" href="css/style.css">
    
            <!--========Bootstrap cdn link============-->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
            <!--===========Animated css link===========-->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css" />
            
            <!--==========Google fonts link==========-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat|Oswald|Poppins|Roboto|Roboto+Condensed|Roboto+Mono&display=swap" rel="stylesheet">
            <!--
    
                font-family: 'Roboto Condensed', sans-serif;
                font-family: 'Montserrat', sans-serif;
                font-family: 'Roboto', sans-serif;
                font-family: 'Oswald', sans-serif;
                font-family: 'Roboto Mono', monospace;
                font-family: 'Poppins', sans-serif;
    
            -->
    
    </header>

    <body style="margin: 0;padding: 0;width: 100%;height: 100%;background: url('/images/gradient.jpg');background-size: cover;">

        <!--========Navigation bar==========-->
        <div id="navbar" class="container animated bounce">

        <ul class="nav nav-pills justify-content-end">
            <li class="nav-item"><a class="nav-link" href="/index.html">HOME</a></li>
            <li class="nav-item"><a class="nav-link" href="/users.php">VIEW ALL USERS</a></li>
        </ul>
        
        </div>

        <div class="container" 
        style="
        width: 50%;
        height: 100%;
        padding: 20px;
        margin: auto;
        margin-top: 5%;
        margin-bottom: 5%;
        text-align: center;
        font-family: 'Roboto Condensed', sans-serif;
        background: #E2E1DC;
        box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);">

                <form class="form justify-content-center" action="/store_id.php" method="get">
                                <div class="form-group" style="margin: auto; margin-top: 5px; margin-left:5px; margin-right:5px; padding: 10px;">
                
                                    Transfering credit from: <input min="0" id="credit-tansfer-from" name="creditfrom" type="number" class="form-control" value="<?php echo $creditfrom ?>">
                                    Transfering credit to: <input min="0" id="credit-transfer-to" name="creditto" type="number" class="form-control" value="<?php echo $creditto ?>">
                                    <input min="0" id="credit-transfer-amount" name="credit-transfer-field" type="number" style="margin-top: 20px;" class="form-control" placeholder="Enter credits">
                                    <Button id="credit-transfer-btn" style="margin-top: 5px;" type="submit" class="btn btn-success" >TRANSFER</Button>
                                </div>
                            </form>
                
                </div>
        
        
    </body>


</html>