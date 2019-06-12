<?php
 include_once('connect.php');

 

 $sql = "SELECT * FROM user";
 $result = $conn->query($sql);

?>

<!DOCTYPE html>

    <header>

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

    </header>

    <body id="users-body" onload="createCard();">

            <!--========Navigation bar==========-->
            <div id="navbar" class="container animated bounce" style="animation-delay: 1000;">

                    <ul class="nav nav-pills justify-content-end">
                        <li class="nav-item"><a class="nav-link" href="/index.html">HOME</a></li>
                        <li class="nav-item"><a class="nav-link active" href="/users.php">VIEW ALL USERS</a></li>
                    </ul>
        
                </div>


        <!--==========User details card============-->

<?php
while($row = $result->fetch_assoc()){
?>

      <div class="card animated slideInDown">
            <div class="card-body">


                <img class="card-image-top" src="/images/dummy_user_image.png" alt="user-image" style="width: 10rem; height: 10rem; border-radius: 50%;">
                <h2 class="card-title"> <?php echo $row['name'] ?> </h2>
                <h6>Credits: <span><?php echo $row['credit'] ?></span></h6>

                <a id="view-btn" href="/details.php?id=<?php echo $row['id'] ?>" class="btn btn-primary" role="button">VIEW DETAILS</a>

            </div>
        </div> 

<?php } ?>


    </body>

</html>