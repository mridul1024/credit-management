<?php
include_once('connect.php');

$creditfrom = $_GET['id1'];

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

    <body id="credit-transfer-body">

        <!--========Navigation bar==========-->
        <div id="navbar" class="container animated bounce">

                <ul class="nav nav-pills justify-content-end">
                    <li class="nav-item"><a class="nav-link" href="/index.html">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="/users.php">VIEW ALL USERS</a></li>
                </ul>
    
            </div>
        
        <!--===========Credit tranfer============-->
        <div id="credit-transfer-box" class="container">
            <form action="">
                    <label for="user-select">Select a user to transfer credits:</label>
                    <select class="form-control" id="user-select" onchange="getIdentification();">
                        
                <?php while($row = $result->fetch_assoc())
                { 
                    ?>        
                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                <?php 
                } 
                    ?>

                    </select>
            </form>

        </div>

        <script>

            function getIdentification(){
            var selectoption = document.getElementById("user-select");
            var optiontext = selectoption.options[selectoption.selectedIndex].getAttribute("value");
            window.location.href = "/credit.php?creditfrom=<?php echo $creditfrom ?>&creditto="+optiontext;
            }

        </script>

    </body>

</html>