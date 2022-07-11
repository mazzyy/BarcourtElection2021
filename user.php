<!doctype html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">


    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="bootstrap/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>






    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
</head>
<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "election";

        if (isset($_GET['search'])) {
            $search=$_GET['search'];
          }

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM voter_list_22 WHERE   COL6 = '$search' OR COL5 LIKE '%$search%' OR COL2 LIKE '%$search%' ";
        
        $result = $conn->query($sql);

       
        
        $cnt = "SELECT * FROM `coun` WHERE `counter` ='$search'";
     
        $cnt2 = $conn->query($cnt);
        
        if ($cnt2->num_rows>0) {
            // output data of each row
            while($row = $cnt2->fetch_assoc()) {
            
    
            }
            } else {
                $count = "INSERT INTO `coun`(`id`, `counter`) VALUES (NULL,'$search')";
                if ($conn->query($count) === TRUE) {
        
                } 
            }
          

        

        
       
?>

<style>
    body {
        background: rgb(204, 204, 204);
    }

    page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
    }

    page[size="A4"] {
        width: 21cm;
        height: 29.7cm;
    }

    page[size="A4"][layout="landscape"] {
        width: 29.7cm;
        height: 21cm;
    }

    page[size="A3"] {
        width: 29.7cm;
        height: 42cm;
    }

    page[size="A3"][layout="landscape"] {
        width: 42cm;
        height: 29.7cm;
    }

    page[size="A5"] {
        width: 14.8cm;
        height: 21cm;
    }

    page[size="A5"][layout="landscape"] {
        width: 21cm;
        height: 14.8cm;
    }

    @media print {

        body,
        page {
            margin: 0;
            box-shadow: 0;
        }
    }
    
@page {
    size: auto;   /* auto is the initial value */
    margin: 0;  /* this affects the margin in the printer settings */
}

   

</style>

<body>


    <main role="main">




        <!-- Marketing messaging and featurettes
      ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

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
                        <h1 class="featurette-heading">Khawja Shoaib Mansoor</h1>
                    </p>

                </div>

            </div>
            <div class="row pt-3">
                <div class="col-12">
                    <table style=" font-size: 20px">
                    <?php
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                           
                                echo "<tr>";
                                echo    '<th style=" width: 200px;">Name</th>';
                                echo    "<th> $row[COL2] </th>";
                                echo "</tr>";

                                echo "<tr>";
                                echo    '<th style=" width: 200px;">F/O W/O D/O</th>';
                                echo    "<th> $row[COL5] </th>";
                                echo "</tr>";

                                
                                echo "<tr>";
                                echo    '<th style=" width: 200px;">Ledger No</th>';
                                echo    "<th> $row[COL6]</th>";
                                echo "</tr>";


                                echo "<tr>";
                                echo    '<th style=" width: 200px;">Status</th>';
                                echo    "<th> $row[COL3]</th>";
                                echo "</tr>";

                                echo "<tr>";
                                echo    '<th style=" width: 200px;">Serial Number</th>';
                                echo    "<th> $row[COL1]</th>";
                                echo "</tr>";
                             
                                    
                                }
                                } else {
                                echo "0 results";
                                }
                                $conn->close();
                    ?>
                      
                    </table>
                    
                </div>


               
                
                
        

            </div>



            <!-- /END THE FEATURETTES -->

        </div><!-- /.container -->


        <!-- FOOTER -->

    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   

    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->

</body>

</html>