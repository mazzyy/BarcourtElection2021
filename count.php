<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">


    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "election";

      

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT COUNT(id) AS NumberOfProducts FROM coun;";
        
        $result = $conn->query($sql);

        

        $sql33 = "SELECT counter , count(counter) FROM coun GROUP BY counter;";
        
        $result33 = $conn->query($sql33);
      
       
?>

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="bootstrap/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>




<body>

    <div class="contianer">


        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-12 pb-5">
                    <center>
                        <br>
                        <h2>Candidate for Honorary Secretary</h2>
                        <h2>Sindh High Court Bar Association</h2>
                    </center>

                </div><!-- /.col-lg-4 -->

            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->



            <!-- <hr class="featurette-divider"> -->


            <div class="row">
                <div class="col-12">
                    <p><img src="picture.jfif" alt="Pineapple"
                            style="width:170px;height:170px;margin-right:15px;float:left; ">
                    </p>
                    <h1 class="featurette-heading">Khawja Shoaib Mansoor</h1>
                    <p></p>

                </div>

            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <table style=" font-size: 20px">
                        <tbody>
                            
  
                            <?php
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                             
                             echo  '<tr>';
                    
                              echo    '<th style=" width: 200px;">Count</th>';
                                echo    "<th> $row[NumberOfProducts] </th>";
                            echo '</tr>';
                             
                                }
                                $conn->close();
                            }  
                            
                            
                            if ($result33->num_rows > 0) {
                                // output data of each row
                                while($row = $result33->fetch_assoc()) {
                             
                             echo  '<tr>';
                              echo    '<th style=" width: 200px;">Name </th>';
                              echo    "<th> $row[counter] </th>";

                              
                             echo '</tr>';

                            
                             
                             
                                }
                           
                            } 
                            ?>

                            

                            
                        </tbody>
                    </table>

                </div>







            </div>



            <!-- /END THE FEATURETTES -->

        </div>

    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->

</body>

</html>