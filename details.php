<?php
include_once('connect.php');

$passedid = $_GET['id'];

$sql = "SELECT * FROM user WHERE id = $passedid";
$result = $conn->query($sql);


?>


<!DOCTYPE html>

    <head>
        <meta charset="utf-8">

        <!--========Personal style sheet link===========-->
        <link rel="stylesheet" href="css/style.css">

        <!--========Bootstrap cdn link============-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <!--==========Animated css cdn link===========-->
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

    </head>

    <body id="details-body">

            <!--=========Navigation bar=========-->
            <div id="navbar" class="container animated bounce">

                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="/index.html">HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="/users.php">VIEW ALL USERS</a></li>
                    </ul>
        
                </div>
        
        <!--=========Expanded detail view==========-->

  <?php
  while($row = $result->fetch_assoc()){


  ?>

      <div id="details-box" class="container">
            <img src="/images/dummy_user_image.png" alt="user-image">
            <h6>ID: <span><?php echo $row['id'] ?></span> </h6>
            <h6>NAME: <span><?php echo $row['name'] ?></span></h6>
            <h6>E-MAIL: <span><?php echo $row['email'] ?></span></h6>
            <h6>CREDIT: <span><?php echo $row['credit'] ?></span></h6>

            <a id="transfer-btn" href="/credit_transfer.php?id1=<?php echo $passedid ?>" class="btn btn-success" role="button">TRANSFER CREDIT</a>
        </div>   

  <?php } ?>

    </body>

</html>